<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColegioController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }
}
