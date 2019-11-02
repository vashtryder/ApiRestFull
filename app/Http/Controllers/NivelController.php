<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nivel;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivel = nivel::paginate(5);
        return view('nivel.index', compact('nivel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nivel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel = new nivel;
        $nivel->nom_nivel = strtoupper($request->nom_nivel);
        $nivel->abv_nivel = strtoupper( substr( $request->nom_nivel , 0, 3) );
        $nivel->save();
        return redirect()->route('nivel.index')->with('datos','Registro Guardado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nivel = nivel::findOrFail($id);
        return view('nivel.show', compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nivel = nivel::findOrFail($id);
        return view('nivel.edit', compact('nivel') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nivel = nivel::findOrFail($id);
        $nivel->nom_nivel = strtoupper($request->nom_nivel);
        $nivel->abv_nivel = strtoupper( substr( $request->nom_nivel , 0, 3) );
        $nivel->save();
        return redirect()->route('nivel.index')->with('nivel','Registro Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nivel = nivel::findOrFail($id);
        $nivel->delete();
        return redirect()->route('nivel.index')->with('nivel','Registro Eliminado correctamente.');
    }

    public function confirm($id)
    {
        $nivel = nivel::findOrFail($id);
        return view('nivel.confirm',compact('nivel'));
    }
}
