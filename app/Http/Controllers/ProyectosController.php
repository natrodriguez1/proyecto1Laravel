<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function index()
    {
        return view('proyecto.index');
    }

    /**
     * 
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
        ]);
        Proyectos::create($request->all());
        return redirect()->route('proyecto.create')
            ->with('sucess','Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyectos $proyectos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyectos $proyectos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyectos $proyectos)
    {
        //
    }
}
