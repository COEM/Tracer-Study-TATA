<?php

use Illuminate\Database\Seeder;

class SoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Soal::insert([
            ['soal'=>'Nama','type'=>'essay','kategori_id' => 1],
            ['soal'=>'Tempat Tanggal Lahir','type'=>'essay','kategori_id' => 1],
            ['soal'=>'Jenis Kelamin','type'=>'opsi','kategori_id' => 1],
            ['soal'=>'Program Studi','type'=>'essay','kategori_id' => 1],
            ['soal'=>'Tahun Lulus','type'=>'essay','kategori_id' => 1],
            ['soal'=>'Status','type'=>'opsi','kategori_id' => 1],
            ['soal'=>'Tempat tinggal','type'=>'opsi','kategori_id' => 1],
            ['soal'=>'No. Telepon','type'=>'essay','kategori_id' => 1],
            ['soal'=>'E-Mail','type'=>'essay','kategori_id' => 1],
            ['soal'=>'Jabatan','type'=>'essay','kategori_id' => 1],
            ['soal'=>'Tanggal Mulai','type'=>'essay','kategori_id' => 1],
            //soal kategori 2
            ['soal'=>'Sebutkan nama lembaga tempat saudara bekerja','type'=>'essay','kategori_id' => 2],
            ['soal'=>'Sebutkan bidang usaha lembaga tempat saudara bekerja','type'=>'essay','kategori_id' => 2],
            ['soal'=>'Setelah lulus, berapa lama saudara menunggu untuk mendapatkan pekerjaan pertama ?','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Dari mana saudara mendapatkan informasi tentang pekerjaan pertama yang saudara peroleh?','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Kapan saudara mulai mencari pekerjaan?','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Bagaimana cara saudara mendapatkan pekerjaan pertama?','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Apakah saudara puas dengan pekerjaan saat ini?','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Berapa gaji saudara perbulan untuk pekerjaan pertama ?','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Berapa lama saudara menekuni pekerjaan saudara saat ini?','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Bidang pekerjaan saudara termasuk sektor','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Bidang pekerjaan: (tuliskan)','type'=>'essay','kategori_id' => 2],
            ['soal'=>'Berapa gaji Saudara per bulan untuk pekerjaan Saudara saat ini ?','type'=>'opsi','kategori_id' => 2],//looing 3x
            ['soal'=>'Apakah bidang pekerjaan saudara saat ini sesuai dengan bidang studi yang saudara ambil','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Permasalahan apa saja yang saudara hadapi dalam rangka memperoleh pekerjaan?','type'=>'essay','kategori_id' => 2],
            ['soal'=>'Apakah saudara memiliki pekerjaan lebih upah paruh waktu','type'=>'opsi','kategori_id' => 2],
            ['soal'=>'Apabila saudara memiliki pekerjaan paruh waktu, berapa jam/minggu saudara bekerja paruh waktu?','type'=>'essay','kategori_id' => 2],

            //soal kategori
            ['soal'=>'Berapa banyak orang yang saudara pekerjakan dalam usaha selain diri anda sendiri?','type'=>'essay','kategori_id' => 3],
            ['soal'=>'Apakah saudara memulai usaha secara mandiri atau dengan keluarga atau pasangan anda?','type'=>'essay','kategori_id' => 3],
            ['soal'=>'Apakah saudara menerima kredit untuk memulai bisnis andadan jika ya, berapa bnyak kredit yang saudara terima?','type'=>'essay','kategori_id' => 3],
            ['soal'=>'Apakah saudara menemui kesulitan ketika memulai usaha sendiri?','type'=>'opsi','kategori_id' => 3],

        ]);
    }
}