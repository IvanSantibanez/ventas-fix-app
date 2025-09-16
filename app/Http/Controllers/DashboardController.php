<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Usuario;

class DashboardController extends Controller
{
       public function dashboardCounts()
    {

        try {
            $usuarios = Usuario::count();
        } catch (\Throwable $e) {
            $usuarios = 0;
        }

        try {
            $clientes = Cliente::count();
        } catch (\Throwable $e) {
            $clientes = 0;
        }

        try {
            $productos = Producto::count();
        } catch (\Throwable $e) {
            $productos = 0;
        }
        return view('dashboard', compact('usuarios', 'clientes', 'productos'));
    }
}
