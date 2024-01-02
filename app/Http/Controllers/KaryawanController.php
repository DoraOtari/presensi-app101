<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    function tampil() {
        return view('karyawan.tampil'); //perintah untuk menampilkan view
    }

    function buat() {
       return view('karyawan.buat',['jabatan' => DB::table('jabatan')->get()]); 
    }
}
