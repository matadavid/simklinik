<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataObatController extends Controller
{
    //
    public function inputobat() {
    	return view('master.data obat.input-obat');
    }
    public function lihatobat() {
    	return view('master.data obat.lihat-obat');
    }
}    

