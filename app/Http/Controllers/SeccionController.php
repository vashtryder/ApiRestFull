<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\seccion;

class SeccionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seccion = seccion::paginate(5);
        return view('seccion.index', compact('seccion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seccion = new seccion;
        $seccion->nom_seccion = strtoupper($request->nom_seccion);
        $seccion->abv_seccion = strtoupper( substr( $request->nom_seccion , 0, 3) );
        $seccion->save();
        return redirect()->route('seccion.index')->with('datos','Registro Guardado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seccion = seccion::findOrFail($id);
        return view('seccion.show', compact('seccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seccion = seccion::findOrFail($id);
        return view('seccion.edit', compact('seccion') );
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
        $seccion = seccion::findOrFail($id);
        $seccion->nom_seccion = strtoupper($request->nom_seccion);
        $seccion->abv_seccion = strtoupper( substr( $request->nom_seccion , 0, 3) );
        $seccion->save();
        return redirect()->route('seccion.index')->with('seccion','Registro Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seccion = seccion::findOrFail($id);
        $seccion->delete();
        return redirect()->route('seccion.index')->with('seccion','Registro Eliminado correctamente.');
    }

    public function confirm($id)
    {
        $seccion = seccion::findOrFail($id);
        return view('seccion.confirm',compact('seccion'));
    }
}
