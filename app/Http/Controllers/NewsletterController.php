<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $request->validate([
            'email' => 'required|email|unique:newsletters,email'
        ]);
    
        DB::beginTransaction();
    
        try {

            newsletter::create([
                'email' => $request->email,
            ]);
    
            DB::commit();
    
            return redirect()->back()->with('success', '¡Gracias por suscribirte!');
    
        } catch (\Exception $e) {

            DB::rollBack();
    
            Log::error('Error al crear el registro de newsletter: '.$e->getMessage());
 
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newsletter $newsletter)
    {
        //
    }
}
