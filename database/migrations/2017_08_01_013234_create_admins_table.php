<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('nama');
            // $table->string('no_induk')->unique();
            // $table->string('no_hp')->nullable();
            // $table->string('alamat');
            // $table->longText('avatar')->nullable();
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            // $table->integer('userable_id')->unsigned();
            // $table->string('userable_type');
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}
