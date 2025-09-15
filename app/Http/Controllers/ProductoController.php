<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        try {

            $productos = Producto::all();
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener los productos.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if ($productos->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => [],
                'message' => 'No se encontraron productos.'
            ], JsonResponse::HTTP_OK);
        }

        return response()->json([
            'success' => true,
            'data' => $productos,
            'message' => 'Lista de productos obtenida exitosamente.'
        ], JsonResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion_corta' => 'required|string|max:50',
            'descripcion_larga' => 'required|string|max:255',
            'imagen_url' => 'required|string',
            'precio_neto' => 'required|numeric|min:0|max:999999999',
            'stock_actual' => 'required|numeric|min:0|max:999999999',
            'stock_minimo' => 'required|numeric|min:0|max:999999999',
            'stock_bajo' => 'required|numeric|min:0|max:999999999',
            'stock_alto' => 'required|numeric|min:0|max:999999999',
        ]);

        $nombre = Producto::where('nombre', $data['nombre'])->first();

        if ($nombre) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El nombre del producto ya está registrado en el sistema.'
            ], JsonResponse::HTTP_CONFLICT);
        }

        $iva =  $data['precio_neto'] * 0.19;
        $data['precio_venta'] = ($data['precio_neto'] + $iva);

        $fechaActual = now()->format('ymd');
        $rand = random_int(0, 999);
        $data['sku'] = $fechaActual . $rand;

        try {
            $producto = Producto::create($data);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al crear el producto.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => $producto,
            'message' => 'Producto creado exitosamente.'
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
            $producto = Producto::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el producto.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }


        if (!$producto) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Producto no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'data' => $producto,
            'message' => 'Producto obtenido exitosamente.'
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
            $producto = Producto::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el producto.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if (!$producto) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Producto no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion_corta' => 'required|string|max:50',
            'descripcion_larga' => 'required|string|max:255',
            'imagen_url' => 'required|string',
            'precio_neto' => 'required|numeric|min:0|max:999999999',
            'stock_actual' => 'required|numeric|min:0|max:999999999',
            'stock_minimo' => 'required|numeric|min:0|max:999999999',
            'stock_bajo' => 'required|numeric|min:0|max:999999999',
            'stock_alto' => 'required|numeric|min:0|max:999999999',
        ]);

        $nombreExistente = Producto::where('nombre', $data['nombre'])->where('id', '!=', $id)->first();

        if ($nombreExistente) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'El nombre del producto ya está registrado en el sistema.'
            ], JsonResponse::HTTP_CONFLICT);
        }

        try {
            $producto->update($data);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al actualizar el producto.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => $producto,
            'message' => 'Producto actualizado exitosamente.'
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
            $producto = Producto::find($id);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al obtener el producto.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        if (!$producto) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Producto no encontrado.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $producto->delete();
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Error al eliminar el producto.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'success' => true,
            'data' => null,
            'message' => 'Producto eliminado exitosamente.'
        ], JsonResponse::HTTP_OK);
    }


    public function indexWeb()
    {

        $productos = Producto::all();
        return view('product-list', compact('productos'));
    }

    public function destroyWeb(string $id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->delete();
        }

        return redirect()->route('productos.index');
    }
}
