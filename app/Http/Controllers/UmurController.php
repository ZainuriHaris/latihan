<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function showForm(){
        return view("umur.cek_umur");
    }
    public function cekProses(Request $request){
        //validasi cek umur
        $request->validate([
            'umur'=> 'required|integer|min:1'
        ]);
        // simpan di session (memori sementara)
        $request->session()->put('umur', $request->umur);
        //jika berhasil lewat middleware to home
        return redirect('home');
    }
}
