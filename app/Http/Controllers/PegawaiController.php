<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function inputdokter() {
    	return view('pegawai.input-dokter');
    }
}
