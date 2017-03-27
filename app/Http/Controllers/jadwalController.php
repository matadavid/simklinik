<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwalController extends Controller
{
    //
    public function inputjadwal() {
    	return view('master.jadwal.input-jadwal');
    }
    public function lihatjadwal() {
    	return view('master.jadwal.lihat-jadwal');
    }
}
