<?php

use Illuminate\Database\Seeder;

class SubSoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\SubSoal::insert([
            [
              'sub' => 'Identitas Diri',
            ],
            [
              'sub' => 'Di Isi Telah Bekerja',
            ],
            [
              'sub' => 'Wirausaha',
            ],
            [
              'sub' => 'Pendidikan Lanjut',
            ],
            [
              'sub' => 'Tidak Bekerja',
            ],
            [
              'sub' => 'Pendapatan Primer atau Sekunder',
            ],
            [
              'sub' => 'Hubungan Pendidikan dan Kerja',
            ],
            [
              'sub' => 'Instrumen',
            ]
        ]);
    }
}
