<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkouts = Checkout::all();
        return view('checkouts.index', compact('checkouts'));
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
        $checkouts = new Checkout();
        $checkouts-> fecSalida = $request->input('salida');
        $checkouts->idCheckin = $request->input('checkin');
        $checkouts->idMetodoPago = $request->input('metpago');
        $checkouts->idVenta = $request->input('venta');
        $checkouts->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
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
        $checkouts = Checkout::find($id);
        $checkouts-> fecSalida = $request->input('salida');
        $checkouts->idCheckin = $request->input('checkin');
        $checkouts->idMetodoPago = $request->input('metpago');
        $checkouts->idVenta = $request->input('venta');
        $checkouts->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $checkouts = Checkout::find($id);
        $checkouts->delete();
        return redirect()->back();

        //
    }
}
