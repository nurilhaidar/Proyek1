<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_peminjam', 50)->unique();
            $table->string('asal_oki', 50)->nullable();
            $table->string('kode_barang', 4)->unique();
            $table->string('nama_barang', 50)->nullable();
            $table->integer('jumlah_barang')->nullable();
            $table->date('tanggal_pinjam')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->string('surat', 10)->nullable();
            $table->string('jaminan', 10)->nullable();
            $table->string('kondisi', 50)->nullable();
            $table->string('status', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_peminjaman');
    }
};
