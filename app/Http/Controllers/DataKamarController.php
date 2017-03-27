<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKamarController extends Controller
{
    //
    public function inputkamar() {
    	return view('master.data kamar.input-kamar');
    }
    public function lihatkamar() {
    	return view('master.data kamar.lihat-kamar');
    }
}
