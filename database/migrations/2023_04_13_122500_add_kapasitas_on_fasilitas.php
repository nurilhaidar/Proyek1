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
        Schema::dropIfExists('fasilitas');
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kode_gedung', 5)->unique();
            $table->string('nama_gedung', 50)->nullable();
            $table->integer('kapasitas')->nullable();
            $table->string('lokasi', 25)->nullable();
            $table->string('kondisi', 50)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fasilitas', function (Blueprint $table) {
            //
        });
    }
};
