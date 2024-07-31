<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Muestra la lista de productos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Puedes pasar datos a la vista aquí si es necesario
        return view('productos');
    }
}
