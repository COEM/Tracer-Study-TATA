<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('sub_soals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('sub_soals');
    }
}
