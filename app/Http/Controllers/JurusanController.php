<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function pplg(){
        return view('jurusan.pplg.index');
    }
    public function tjkt(){
        return view('jurusan.tjkt.index');
    }
    public function busana(){
        return view('jurusan.busana.index');
    }
}
