<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowkers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->longtext('isi');
            $table->string('gambar')->nullable();
            $table->string('penulis');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lowkers');
    }
}
