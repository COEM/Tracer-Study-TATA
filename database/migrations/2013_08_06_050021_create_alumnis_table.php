<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->integer('tahun_masuk')->nullable();;
            $table->integer('tahun_keluar')->nullable();;
            $table->string('prodi')->nullable();;
            $table->string('no_telp')->nullable();;
            $table->string('avatar')->nullable();;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}
