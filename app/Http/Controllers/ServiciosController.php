<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $servicios = Servicios::with(['caracteristicas', 'paraQuien'])->get();


        return view('enlimonado.pages.services.index', compact('servicios'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(servicios $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servicios $servicios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, servicios $servicios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(servicios $servicios)
    {
        //
    }
}
