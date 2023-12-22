<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::view('/profil', 'admin.profil');

Route::post('/profil', function(){
    $path = request('avatar')->store('Avatars');
    DB::table('users')->where('id',auth()->user()->id)->update(['avatar' => $path]);
    return redirect('/profil')->with('pesan', 'Berhasil upload foto');
});

Route::get('/jabatan', function(){
    $jabatan = DB::table('jabatan')->get(); //perintah untuk mengambil data dari database
    return view('jabatan.tampil', ['jabatan' => $jabatan]); //perintah kirim data ke alamat view tujuan
});