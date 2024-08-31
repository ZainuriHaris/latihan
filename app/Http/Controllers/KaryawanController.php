<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $data_karyawan = 'haris ini';
        return view('employee.index',compact('data_karyawan'));
    }
}
