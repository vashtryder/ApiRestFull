<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anio;

class AnioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anio = anio::paginate(5);
        return view('anio.index', ['datos' => $anio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anio = new anio;
        $anio->nom_anio = $request->nom_anio;
        $anio->est_anio = 1;
        $anio->save();
        return redirect()->route('anio.index')->with('datos','Registro Guardado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anio = anio::findOrFail($id);
        return view('anio.show', ['datos' => $anio] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anio = anio::findOrFail($id);
        return view('anio.edit', ['datos' => $anio] );
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
        $anio = anio::findOrFail($id);
        $anio->nom_anio = $request->nom_anio;
        $anio->est_anio = 1;
        $anio->save();
        return redirect()->route('anio.index')->with('datos','Registro Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anio = anio::findOrFail($id);
        $anio->delete();
        return redirect()->route('anio.index')->with('datos','Registro Eliminado correctamente.');
    }

    public function confirm($id)
    {
        $anio = anio::findOrFail($id);
        return view('anio.confirm',['datos' => $anio]);
    }
}
