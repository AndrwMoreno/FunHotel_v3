<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkins = Checkin::all();
        return view('checkins.index', compact('checkins'));
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
        $checkins = new Checkin();
        $checkins-> fecIngreso = $request->input('ingreso');
        $checkins->idReserva = $request->input('reserva');
        $checkins->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkin $checkin)
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
        $checkins = Checkin::find($id);
        $checkins-> fecIngreso = $request->input('ingreso');
        $checkins->idReserva = $request->input('reserva');
        $checkins->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $checkins = Checkin::find($id);
        $checkins->update();
        return redirect()->back();
        //
    }
}
