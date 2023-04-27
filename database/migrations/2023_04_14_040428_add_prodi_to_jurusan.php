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
        Schema::dropIfExists('jurusan');
        Schema::create('jurusan', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 6)->unique();
            $table->string('nama', 100)->nullable;
            $table->string('ketua_jurusan', 100)->nullable;
            $table->integer('jml_prodi')->nullable;
            $table->string('akreditasi', 1)->nullable;
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
        Schema::table('jurusan', function (Blueprint $table) {
            //
        });
    }
};
