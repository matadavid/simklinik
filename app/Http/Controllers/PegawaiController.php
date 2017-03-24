<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function inputdokter() {
    	return view('master.pegawai.input-dokter');
    }
    public function lihatdokter() {
    	return view('master.pegawai.lihat-dokter');
    }
    public function inputperawat() {
    	return view('master.pegawai.input-perawat');
    }
    public function lihatperawat() {
    	return view('master.pegawai.lihat-perawat');
    }
    public function inputpegawailain() {
    	return view('master.pegawai.input-pegawai-lain');
    }
    public function lihatpegawailain() {
    	return view('master.pegawai.lihat-pegawai-lain');
    }
}
