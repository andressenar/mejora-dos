<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colaborador = Colaborador::orderBy('id', 'desc')->get();
        return view('colaborador.index', compact('colaborador'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colaborador.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $colaborador = new Colaborador();
        
        $colaborador->nif = $request->nif;
        $colaborador->nombre = $request->nombre;
      
        
        
        $colaborador->save();
        return redirect()->route('colaborador.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colaborador $colaborador)
    {
        return view('colaborador.show',compact('colaborador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Colaborador $colaborador)
    {
        return view('colaborador.edit',compact('colaborador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colaborador $colaborador)
    {
        
        
        $colaborador->nif = $request->nif;
        $colaborador->nombre = $request->nombre;
        
        
        $colaborador->save();
        return redirect()->route('colaborador.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colaborador $colaborador)
    {
        $colaborador->delete();
        return redirect()->route('colaborador.index');
    }
}
