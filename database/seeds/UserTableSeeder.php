<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        \App\User::insert([
            [
              // 'name' => 'Ibnul Mutaki',
              'username' => '3201416070',
              'email' => 'ibnuul@gmail.com',
              'password' => Hash::make('password'),
              'alumni_id' => '1',
              'avatar' => '12556012_1988946474662893_1839458589_n.jpg'
              //'userable_type' => 'App\Admin'
            ]

        ]);
    }
}
