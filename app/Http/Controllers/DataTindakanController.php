<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTindakanController extends Controller
{
    //
    public function inputtindakan() {
    	return view('master.data tindakan.input-tindakan');
    }
    public function lihattindakan() {
    	return view('master.data tindakan.lihat-tindakan');
    }
}
