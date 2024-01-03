<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
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

    function simpan(Request $request){
        Karyawan::create([
            'jabatan_id' => $request->jabatan_id,
            'user_id' => $request->user_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kelamin' => $request->kelamin,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'alamat' => $request->alamat,
        ]); //kode simpan data ke database

        return redirect('/karyawan')->with('pesan', 'berhasil simpan karyawan');
    }
}
