<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\grado;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grado = grado::paginate(5);
        return view('grado.index', compact('grado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grado = new grado;
        $grado->nom_grado = strtoupper($request->nom_grado);
        $grado->abv_grado = strtoupper( substr( $request->nom_grado , 0, 3) );
        $grado->save();
        return redirect()->route('grado.index')->with('datos','Registro Guardado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grado = grado::findOrFail($id);
        return view('grado.show', compact('grado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grado = grado::findOrFail($id);
        return view('grado.edit', compact('grado') );
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
        $grado = grado::findOrFail($id);
        $grado->nom_grado = strtoupper($request->nom_grado);
        $grado->abv_grado = strtoupper( substr( $request->nom_grado , 0, 3) );
        $grado->save();
        return redirect()->route('grado.index')->with('grado','Registro Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id){
        $grado = grado::findOrFail($id);
        $grado->delete();
        return redirect()->route('grado.index')->with('grado','Registro Eliminado correctamente.');
    }

    public function confirm($id)
    {
        $grado = grado::findOrFail($id);
        return view('grado.confirm',compact('grado'));
    }
}
