<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kategori::insert([
            [
              'kategori' => 'Identitas Diri',
            ],
            [
              'kategori' => 'Di Isi Telah Bekerja',
            ],
            [
              'kategori' => 'Wirausaha',
            ],
            [
              'kategori' => 'Pendidikan Lanjut',
            ],
            [
              'kategori' => 'Tidak Bekerja',
            ],
            [
              'kategori' => 'Pendapatan Primer atau Sekunder',
            ],
            [
              'kategori' => 'Hubungan Pendidikan dan Kerja',
            ],
            [
              'kategori' => 'Instrumen',
            ]
        ]);
    }
}
