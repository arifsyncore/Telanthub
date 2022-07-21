<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nidn');
            $table->date('tgl_lahir');
            $table->string('jekel');
            $table->string('email');
            $table->string('no_telp');
            $table->string('perguruan_tinggi');
            $table->string('fakultas');
            $table->string('gelar');
            $table->string('penelitian');
            $table->string('informasi');
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
        Schema::dropIfExists('dosen');
    }
}
