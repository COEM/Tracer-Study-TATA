<?php

use Illuminate\Database\Seeder;
use App\Alumni;
class AlumniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumni::insert([
            [
              // 'name' => 'Ibnul Mutaki',
              'nim' => '3201416070',
              'nama' => 'Ibnul Mutaki',
              'alamat' => 'Jawai, Parit Setia'
              // 'password' => Hash::make('password'),
              //'userable_id' => '1',
              //'userable_type' => 'App\Admin'
            ]

        ]);
    }
}
