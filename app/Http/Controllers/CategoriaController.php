<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias = new Categoria();
        $categorias->nombre = $request->input('nombre');
        $categorias->descripcion = $request->input('descripcion');
        $categorias->estado = Categoria::Activo;
        $categorias->save();
        return redirect()->back()->with('success', 'Categoria creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categorias = Categoria::find($categoria->id);
        $categorias->nombre = $request->input('nombre');
        $categorias->descripcion = $request->input('descripcion');
        $categorias->estado = $request->input('estado');
        $categorias->update();
        return redirect()->back()->with('success', 'Categoria actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categorias = Categoria::find($categoria->id);
        $categorias->delete();
        return redirect()->back()->with('success', 'Categoria eliminada exitosamente');
    }
}
