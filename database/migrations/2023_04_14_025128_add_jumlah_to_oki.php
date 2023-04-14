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
        Schema::dropIfExists('oki');
        Schema::create('oki', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 6)->unique();
            $table->string('nama_oki', 100)->nullable;
            $table->string('ketua_oki', 100)->nullable;
            $table->integer('jumlah_anggota')->nullable;
            $table->string('akun', 100)->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oki', function (Blueprint $table) {
            //
        });
    }
};
