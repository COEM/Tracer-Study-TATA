<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlumniTableSeeder::class);
        $this->call(SubSoalTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AdminTableSeeder::class);
    }
}
