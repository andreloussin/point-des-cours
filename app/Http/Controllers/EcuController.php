<?php

namespace App\Http\Controllers;

use App\Models\Ecu;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EcuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Ecu/Index',['ecus'=>Ecu::paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecu  $ecu
     * @return \Illuminate\Http\Response
     */
    public function show(Ecu $ecu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecu  $ecu
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecu $ecu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecu  $ecu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecu $ecu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecu  $ecu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecu $ecu)
    {
        //
    }
}
