<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\Categoria;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $habitaciones = new Habitacion();
        $habitaciones->numeroHabitacion = $request->input('numeroHabitacion');
        $habitaciones->descripcion = $request->input('descripcion');
        $habitaciones->estado = $request->input('estado');
        // $habitaciones->estado = $request->estado;
        $habitaciones->idCategoria = $request->input('idCategoria');
        $habitaciones->save();
        return redirect()->back()->with('success', 'Habitacion creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Habitacion $habitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habitacion $habitacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Habitacion $habitacion)
    {
        $habitaciones = Habitacion::find($habitacion->id);
        $habitaciones->numeroHabitacion = $request->input('numeroHabitacion');
        $habitaciones->descripcion = $request->input('descripcion');
        $habitaciones->estado = $request->input('estado');
        $habitaciones->idCategoria = $request->input('idCategoria');
        $habitaciones->update();
        return redirect()->back()->with('success', 'Habitacion actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habitacion $habitacion)
    {
        $habitaciones = Habitacion::find($habitacion->id);
        $habitaciones->delete();
        return redirect()->back()->with('success', 'Habitacion eliminada exitosamente');
    }
}
