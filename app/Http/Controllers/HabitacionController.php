<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use App\Models\Categoria;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habitaciones = Habitacion::all();
        $categorias = Categoria::all();
        return view('habitaciones.index', compact('habitaciones', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('habitaciones.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $habitacion = new Habitacion();
        $habitacion->numeroHabitacion = $request->input('numeroHabitacion');
        $habitacion->descripcion = $request->input('descripcion');
        $habitacion->idCategoria = $request->input('idCategoria');
        $habitacion->estado = $request->input('estado');
        $habitacion->save();
        // return redirect()->back()->with('success', 'Habitacion creada exitosamente');
        return redirect()->route('habitaciones.index')->with('success', 'Habitacion creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorias = Categoria::all();
        $habitacion = Habitacion::find($id);
        return view('habitaciones.edit', compact('habitacion', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion->numeroHabitacion = $request->input('numeroHabitacion');
        $habitacion->descripcion = $request->input('descripcion');
        $habitacion->idCategoria = $request->input('idCategoria');
        $habitacion->estado = $request->input('estado');
        $habitacion->update();
        return redirect()->route('habitaciones.index')->with('success', 'Habitacion actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $habitacion =habitacion::find($id);
        $habitacion->delete();
        return redirect()->route('habitaciones.index')->with('success', 'Habitacion eliminada exitosamente');
    }
}
