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
Route::get('/template', function () {
     return view('layout.master');
 });
Route::get('/input-dokter', 'pegawaicontroller@inputdokter');
Route::get('/lihat-dokter', function () {
     return view('pegawai.lihat-dokter');
 });
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