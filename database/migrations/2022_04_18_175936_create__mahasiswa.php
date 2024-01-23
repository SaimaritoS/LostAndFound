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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_user');
            $table->string('nama');
            $table->string('nim')->unique();
            $table->foreignId('prodi_id');
            $table->bigInteger('nohp');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->timestamps();
            $table->foreign('prodi_id')->references('id')->on('prodi');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
