<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jabatan_id')->constant('jabatan');
            $table->foreignId('user_id')->constant('user');
            $table->string('nik');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->enum('kelamin',['laki-laki','perempuan']);
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
