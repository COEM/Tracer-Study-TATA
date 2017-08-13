<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AlumniTableSeeder::class);
        $this->call(KategoriTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(SoalTableSeeder::class);
        $this->call(OpsiTableSeeder::class);
    }
}
