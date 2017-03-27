<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/cobas', function () {
     return view('layout.master');
 });
//tampilan master bagian pegawai
Route::get('/input-dokter', 'pegawaicontroller@inputdokter');
Route::get('/lihat-dokter', 'pegawaicontroller@lihatdokter');
Route::get('/input-perawat', 'pegawaicontroller@inputperawat');
Route::get('/lihat-perawat', 'pegawaicontroller@lihatperawat');
Route::get('/input-pegawai-lain', 'pegawaicontroller@inputpegawailain');
Route::get('/lihat-pegawai-lain', 'pegawaicontroller@lihatpegawailain');
//tampilan master bagian kamar
Route::get('/input-kamar', 'DataKamarcontroller@inputkamar');
Route::get('/lihat-kamar', 'DataKamarcontroller@lihatkamar');
//tampiilan master bagian jadwal
Route::get('/input-jadwal', 'Jadwalcontroller@inputjadwal');
Route::get('/lihat-jadwal', 'Jadwalcontroller@lihatjadwal');
//tampiilan master bagian obat
Route::get('/input-obat', 'dataobatcontroller@inputobat');
Route::get('/lihat-obat', 'dataobatcontroller@lihatobat');
//tampiilan master bagian tindakan
Route::get('/input-tindakan', 'datatindakancontroller@inputtindakan');
Route::get('/lihat-tindakan', 'datatindakancontroller@lihattindakan');
//tampiilan master bagian Penyakit
Route::get('/input-penyakit', 'datapenyakitcontroller@inputpenyakit');
Route::get('/lihat-penyakit', 'datapenyakitcontroller@lihatpenyakit');
//tampilan set data
Route::get('/set-jenis-obat', 'SetDatacontroller@SetJenisObat');
Route::get('/set-kategori-obat', 'SetDatacontroller@SetKategoriObat');
Route::get('/set-kategori-penyakit', 'SetDatacontroller@SetKategoriPenyakit');
Route::get('/set-kategori-tindakan', 'SetDatacontroller@SetKategoriTindakan');
Route::get('/set-nama-kabupaten', 'SetDatacontroller@SetNamaKabupaten');
Route::get('/set-nama-kecamatan', 'SetDatacontroller@SetNamaKecamatan');
Route::get('/set-nama-kelurahan', 'SetDatacontroller@SetNamaKelurahan');
Route::get('/set-satuan-obat', 'SetDatacontroller@SetSatuanObat');

Route::get('/resepsionis', function () {
     return view('layout.resepsionis');
 });
Route::get('/kasir', function () {
     return view('layout.kasir');
 });
Route::get('/perawat', function () {
     return view('layout.perawat');
 });
Route::get('/dokter', function () {
     return view('layout.dokter');
 });