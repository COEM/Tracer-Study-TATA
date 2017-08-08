<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        \App\Admin::insert([
            [
              'name' => 'Administrator',
              'email' => 'admin@tracer.com',
              'password' => Hash::make('password'),
              //'userable_id' => '1',
              //'userable_type' => 'App\Admin'
            ]

        ]);
    }
}
