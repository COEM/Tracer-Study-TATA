<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengumunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumunans', function (Blueprint $table) {
            $table->increments('id');
            $table->string("ket");
            $table->string("tanggal");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengumunans');
    }
}
