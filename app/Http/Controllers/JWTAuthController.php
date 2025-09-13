<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        return response()->json(auth()->user());
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Has cerrado sesión.');
    }
}
