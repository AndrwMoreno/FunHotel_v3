<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->primerNombre = $request->input('primerNombre');
        $cliente->segundoNombre = $request->input('segundoNombre');
        $cliente->primerApellido = $request->input('primerApellido');
        $cliente->segundoApellido = $request->input('segundoApellido');
        $cliente->tipoDocumento = $request->input('tipoDocumento');
        $cliente->numeroDocumento = $request->input('numeroDocumento');
        $cliente->celular = $request->input('celular');
        $cliente->correo = $request->input('correo');
        $cliente->save();
        return redirect()->back()->with('success', 'Cliente creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        // return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        // return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->primerNombre = $request->input('primerNombre');
        $cliente->segundoNombre = $request->input('segundoNombre');
        $cliente->primerApellido = $request->input('primerApellido');
        $cliente->segundoApellido = $request->input('segundoApellido');
        $cliente->tipoDocumento = $request->input('tipoDocumento');
        $cliente->numeroDocumento = $request->input('numeroDocumento');
        $cliente->celular = $request->input('celular');
        $cliente->correo = $request->input('correo');
        $cliente->update();
        return redirect()->back()->with('success', 'Cliente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente = Cliente::find($cliente->id);
        $cliente->delete();
        return redirect()->back()->with('success', 'Cliente eliminado exitosamente');
    }
}
