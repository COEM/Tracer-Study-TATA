<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumni_id')->unsigned();
            $table->integer('kategori_id')->unsigned();
            $table->json('ket');
            $table->date('periode');
            $table->timestamps();
            $table->foreign('alumni_id')->references('id')->on('alumnis')->onUpdate('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawabans');
    }
}
