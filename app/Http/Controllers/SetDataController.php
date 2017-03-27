<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetDataController extends Controller
{
    //
    public function SetJenisObat() {
    	return view('master.set data.set-jenis-obat');
    }
    public function SetKategoriObat() {
    	return view('master.set data.set-kategori-obat');
    }
    public function SetKategoriTindakan() {
    	return view('master.set data.set-kategori-tindakan');
    }
    public function SetKategoriPenyakit() {
    	return view('master.set data.set-kategori-penyakit');
    }
    public function SetNamaKecamatan() {
    	return view('master.set data.set-nama-kecamatan');
    }
    public function SetNamaKelurahan() {
    	return view('master.set data.set-nama-kelurahan');
    }
    public function SetNamaKabupaten() {
    	return view('master.set data.set-nama-kabupaten');
    }
    public function SetSatuanObat() {
    	return view('master.set data.set-satuan-obat');
    }
}
