<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        $foto = Photo::latest()->paginate(6);
        return view('galeri.index', compact('foto'));
    }
}
