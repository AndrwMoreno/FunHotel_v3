<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Servicio;
use Illuminate\Http\Request;

class VentaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        $servicios = Servicio::all();
        return view('ventas.index', compact('ventas','servicios'));
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

            $venta = new Venta();
            $venta->fecha_venta = $request->fecha_venta;
            $venta->estado = $request->estado;
            $venta->idServicio = $request->idServicio;
            $venta->save();
            return redirect()->back()->with('mensaje', 'Venta registrada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        $venta = Venta::find($venta->id);
        $venta->fecha_venta = $request->input('fecha_venta');
        $venta->estado = $request->input('estado');
        $venta->idServicio = $request->input('idServicio');
        $venta->update();
        return redirect()->back()->with('mensaje', 'Venta actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $venta = Venta::find($venta->id);
        $venta->delete();
        return redirect()->back()->with('mensaje', 'Venta eliminada con éxito');
    }
}
