<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        try {

            $clientes = Cliente::all();
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener los clientes.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if ($clientes->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => [],
                'message' => 'No se encontraron clientes.'
            ], JsonResponse::HTTP_OK);
        }

        return response()->json([
            'success' => true,
            'data' => $clientes,
            'message' => 'Lista de clientes obtenida exitosamente.'
        ], JsonResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'rut_empresa' => 'required|string|regex:/^\d{7,8}-[\dkK]$/|max:10',
                'rubro' => 'required|string|max:50',
                'razon_social' => 'required|string|max:255',
                'telefono' => 'required|regex:/^56\d{9}$/|string',
                'direccion' => 'required|string|max:255',
                'nombre_contacto' => 'required|string|max:255',
                'email_contacto' => 'required|email|max:255',

            ],
            [
                'rut_empresa.regex' => 'El formato del RUT es inválido. Debe ser 12345678-9',
                'telefono.regex' => 'El formato del teléfono es inválido. Debe comenzar con 56 seguido de 9 dígitos.',
            ]
        );


        $rut_empresa = Cliente::where('rut_empresa', $data['rut_empresa'])->first();

        if ($rut_empresa) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El RUT de la empresa ya está registrado en el sistema.'
            ], JsonResponse::HTTP_CONFLICT);
        }

        try {
            $cliente = Cliente::create($data);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al crear el cliente.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => $cliente,
            'message' => 'Cliente registrado exitosamente.'
        ], JsonResponse::HTTP_CREATED);
    }

    public function show(string $id)
    {

        if ((int)$id <= 0) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El ID es inválido.'
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $cliente = Cliente::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el cliente.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }


        if (!$cliente) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Cliente no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'data' => $cliente,
            'message' => 'Cliente obtenido exitosamente.'
        ], JsonResponse::HTTP_OK);
    }

    public function update(Request $request, string $id)
    {
        if ((int)$id <= 0) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El ID es inválido.'
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $cliente = Cliente::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el cliente.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if (!$cliente) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Cliente no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = $request->validate(
            [
                'rut_empresa' => 'required|string|regex:/^\d{7,8}-[\dkK]$/|max:10',
                'rubro' => 'required|string|max:50',
                'razon_social' => 'required|string|max:255',
                'telefono' => 'required|regex:/^56\d{9}$/|string',
                'direccion' => 'required|string|max:255',
                'nombre_contacto' => 'required|string|max:255',
                'email_contacto' => 'required|email|max:255',

            ],
            [
                'rut_empresa.regex' => 'El formato del RUT es inválido. Debe ser XXXXXXXX-X',
                'telefono.regex' => 'El formato del teléfono es inválido. Debe comenzar con 56 seguido de 9 dígitos.'
            ]
        );

        $rutExistente = Cliente::where('rut_empresa', $data['rut_empresa'])->where('id', '!=', $id)->first();

        if ($rutExistente) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El RUT de la empresa ya está registrado en el sistema.'
            ], JsonResponse::HTTP_CONFLICT);
        }

        try {
            $cliente->update($data);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al actualizar el cliente.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => $cliente,
            'message' => 'Cliente actualizado exitosamente.'
        ], JsonResponse::HTTP_OK);
    }


    public function destroy(string $id)
    {
        if ((int)$id <= 0) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El ID es inválido.'
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $cliente = Cliente::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el cliente.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if (!$cliente) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Cliente no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $cliente->delete();
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al eliminar el cliente.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => null,
            'message' => 'Cliente eliminado exitosamente.'
        ], JsonResponse::HTTP_OK);
    }
}
