<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPenyakitController extends Controller
{
    //
    public function inputpenyakit() {
    	return view('master.data penyakit.input-penyakit');
    }
    public function lihatpenyakit() {
    	return view('master.data penyakit.lihat-penyakit');
    }
}
