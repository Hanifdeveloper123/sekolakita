<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TefaController extends Controller
{
    public function index(){
        return view('tefa.index');
    }
}
