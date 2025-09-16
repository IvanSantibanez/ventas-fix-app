<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class JWTAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'rut' => 'required|string|max:10',
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'password' => 'required|min:6'
        ]);

        $email = $request->nombre . "." . $request->apellido . "@ventasfix.cl";

        $usuario = Usuario::create([
            'rut' => $request->rut,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $email,
            'password' => bcrypt($request->password)
        ]);

        $token = JWTAuth::fromUser($usuario);

        if ($request->expectsJson()) {
            return response()->json(
                [
                    'success' => true,
                    'usuario' => $usuario,
                    'token' => $token
                ],
                JsonResponse::HTTP_CREATED
            );
        }

        $request->session()->regenerate();
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!$token = JWTAuth::attempt($credentials)) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'data' => null,
                    'message' => 'Credenciales inválidas.'
                ], JsonResponse::HTTP_UNAUTHORIZED);
            }
            return back()->withErrors(['message' => 'Credenciales inválidas.']);
        }

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'data' => $token,
                'message' => 'Has iniciado sesión correctamente'
            ]);
        }

        $request->session()->regenerate();
        return redirect()->intended('/dashboard')->with('message', 'Inicio de sesión exitoso.')->withCookie(cookie('token', $token, 180));
    }

    public function perfil()
    {
        return response()->json([
            'success' => true,
            'data' => auth()->user(),
            'message' => 'Perfil del usuario obtenido exitosamente.'
        ], JsonResponse::HTTP_OK);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Has cerrado sesión.');
    }

    public function deleteUser(string $id)
    {
        if ((int)$id <= 0) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El ID es inválido.'
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $usuario = Usuario::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el usuario.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if (!$usuario) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Usuario no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $usuario->delete();
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al eliminar el usuario.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => null,
            'message' => 'Usuario eliminado correctamente.'
        ], JsonResponse::HTTP_OK);
    }

    public function getAllUsers()
    {
        try {
            $usuarios = Usuario::all();
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener los usuarios.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => $usuarios,
            'message' => 'Usuarios obtenidos exitosamente.'
        ], JsonResponse::HTTP_OK);
    }

    public function getUserById(string $id)
    {
        if ((int)$id <= 0) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El ID es inválido.'
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $usuario = Usuario::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el usuario.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if (!$usuario) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Usuario no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'data' => $usuario,
            'message' => 'Usuario obtenido exitosamente.'
        ], JsonResponse::HTTP_OK);
    }

    public function updateUser(Request $request, string $id)
    {
        if ((int)$id <= 0) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El ID es inválido.'
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $usuario = Usuario::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el usuario.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if (!$usuario) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Usuario no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        $request->validate([
            'rut' => 'required|string|max:10',
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'password' => 'required|min:6'
        ]);

        if ($request->has('password')) {
            $data['password'] = bcrypt($request['password']);
        }

        $email = $request->nombre . "." . $request->apellido . "@ventasfix.cl";

        try {
            $usuario->update([
                'rut' => $request->rut,
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'email' => $email,
                'password' => bcrypt($request->password)
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al actualizar el usuario.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => $usuario,
            'message' => 'Usuario actualizado correctamente.'
        ], JsonResponse::HTTP_OK);
    }

    public function indexWeb()
    {

        try {
            $usuarios = Usuario::all();
        } catch (\Throwable $e) {
            return back()->withErrors(['error' => 'Error al obtener los usuarios']);
        }

        if (!$usuarios) {
            return back()->withErrors(['error' => 'No hay usuarios para mostrar']);
        }

        return view('user-list', compact('usuarios'));
    }

    public function showWeb(string $id)
    {

        try {
            $usuario = Usuario::find($id);
        } catch (\Throwable $e) {
            return back()->withErrors(['error' => 'Error al obtener el usuario.']);
        }

        return view('user-detail', compact('usuario'));
    }

    public function updateWeb(Request $request, string $id)
    {
        $request->validate([
            'rut' => 'required|string|max:10',
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100'
        ]);

        $email = $request->nombre . "." . $request->apellido . "@ventasfix.cl";

        try {
            $usuario = Usuario::find($id);
        } catch (\Throwable $e) {
            return back()->withErrors(['error' => 'Error al buscar el usuario en el sistema.']);
        }


        try {
            $usuario->update([
                'rut' => $request->rut,
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'email' => $email
            ]);
        } catch (\Throwable $e) {
            return back()->withErrors(['error' => 'Error al actualizar el usuario.']);
        }

        return redirect()->route('usuarios.index');
    }

    public function destroyWeb(string $id)
    {


        try {
            $usuario = Usuario::find($id);
        } catch (\Throwable $e) {
            return back()->withErrors(['error' => 'Error al buscar el usuario']);
        }

        if (Auth::id() === $usuario->id) {
            return back()->withErrors(['error' => 'No puedes eliminar tu propio usuario.']);
        }

        if ($usuario) {
            try {
                $usuario->delete();
            } catch (\Throwable $e) {
                return back()->withErrors(['error' => 'Error al eliminar el usuario']);
            }
        }

        return redirect()->route('usuarios.index');
    }
}
