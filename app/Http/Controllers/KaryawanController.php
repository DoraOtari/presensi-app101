<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    function tampil() {
        return view('karyawan.tampil'); //perintah untuk menampilkan view
    }
}
