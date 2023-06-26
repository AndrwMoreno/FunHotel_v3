<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
        //
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
        $reservas = new Reserva;
        $reservas->idHabitacion = $request->input('habitacion');
        $reservas->idServicio = $request->input('servicio');
        $reservas->idCliente = $request->input('cliente');
        $reservas->estado = $request->input('estado');
        $reservas->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reservas = Reserva::find($id);
        $reservas->idHabitacion = $request->input('habitacion');
        $reservas->idServicio = $request->input('servicio');
        $reservas->idCliente = $request->input('cliente');
        $reservas->estado = $request->input('estado');
        $reservas->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservas = Reserva::find($id);
        $reservas->delete();
        return redirect()->back();
        //
    }
}
