<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//controller
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UmurController;
use App\Http\Controllers\KaryawanController;

//middleware
use App\Http\Middleware\CekUmur;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/haris', function () {
    return view ('haris');
})->name('nama');

Route::get('/utama', function () {
    return view('utama');
});

Route::resource('profile',ProfileController::class);

// mengalihkan beberapa methote
Route::match(['GET','POST'],'jangan_dibuka', function(){
    return redirect ('/');
});

// midleware
//memanggil langsung di controller
Route::get('cek_umur_saya', [UmurController::class,'showForm']);
Route::post('cek_proses', [UmurController::class,'cekProses'])->name('proses');
Route::get('home', function(){
    return "kamu sudah cukup umur";
})->middleware(CekUmur::class);

//controller
Route::get('employee', [KaryawanController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
