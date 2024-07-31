<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientesController extends Controller
{
    // Muestra el formulario para crear un nuevo cliente
    public function create()
    {
        return view('clientes.create');
    }

    // Almacena un nuevo cliente en la base de datos
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombres' => 'required|string|max:20',
            'apellidos' => 'required|string|max:20',
           'numero' => 'required|digits:9',
'dni' => 'required|digits:8',
            'nombre_producto' => 'required|string|max:20',
            'monto_total' => 'required|numeric|min:0',
            'fecha_hora_compra' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Clientes::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente creado exitosamente.');
    }

    // Muestra una lista de todos los clientes
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    // Muestra los detalles de un cliente específico
    public function show(Clientes $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    // Muestra el formulario para editar un cliente específico
    public function edit(Clientes $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    // Actualiza un cliente existente en la base de datos
    public function update(Request $request, Clientes $cliente)
    {
        $validator = Validator::make($request->all(), [
            'nombres' => 'required|string|max:20',
            'apellidos' => 'required|string|max:20',
            'numero' => 'required|digits:9',
'dni' => 'required|digits:8',
            'nombre_producto' => 'required|string|max:20',
            'monto_total' => 'required|numeric|min:0',
            'fecha_hora_compra' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado exitosamente.');
    }

    // Elimina un cliente específico
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado exitosamente.');
    }
}
