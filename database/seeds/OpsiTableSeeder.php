<?php

use Illuminate\Database\Seeder;
use App\Opsi;
class OpsiTableSeeder extends Seeder
{

    public function run()
    {
        \App\Opsi::insert([
            ['soal_id'=>'3','ket'=>'laki-laki'],
            ['soal_id'=>'3','ket'=>'perempuan'],
            ['soal_id'=>'5','ket'=>'sudah bekerja'],
            ['soal_id'=>'5','ket'=>'belum bekerja'],
            ['soal_id'=>'6','ket'=>'pedesaan'],
            ['soal_id'=>'6','ket'=>'pinggiran kota / kota'],
            ['soal_id'=>'6','ket'=>'luar negeri'],

            //opsi untuk kategori ke 2
            ['soal_id'=>'14','ket'=>'Sudah bekerja sebelum lulus'],
            ['soal_id'=>'14','ket'=>'kurang dari 3 bulan'],
            ['soal_id'=>'14','ket'=>'3-6 bulan'],
            ['soal_id'=>'14','ket'=>'6-12 bulan'],
            ['soal_id'=>'14','ket'=>'1-2 tahun'],
            ['soal_id'=>'14','ket'=>'lebih dari 2 tahun'],
            ['soal_id'=>'15','ket'=>'iklan'],
            ['soal_id'=>'15','ket'=>'teman'],
            ['soal_id'=>'15','ket'=>'keluarga'],
            ['soal_id'=>'15','ket'=>'pengguna kerja (employer)'],
            ['soal_id'=>'15','ket'=>'mencari sendiri: browsing di internet dan sebagainya'],
            ['soal_id'=>'16','ket'=>'lebih dari satu bulan sebelum wisuda'],
            ['soal_id'=>'16','ket'=>'segera setelah wisuda'],
            ['soal_id'=>'16','ket'=>'lebih dari satu bulan setelah wisuda'],
            ['soal_id'=>'16','ket'=>'Belum memperoleh informasi lowongan pekerjaan yang relative relevan'],
            ['soal_id'=>'17','ket'=>'Berkompetisi (dengan tes)'],
            ['soal_id'=>'17','ket'=>'Rekomedasi (tanpa tes)'],
            ['soal_id'=>'17','ket'=>'Ditempatkan (karena ikatan dinas dsb)'],
            ['soal_id'=>'17','ket'=>'Diminta oleh pengguna'],
            ['soal_id'=>'17','ket'=>'Memanfaatkan koneksi'],
            ['soal_id'=>'17','ket'=>'Melalui agen tenaga kerja'],
            ['soal_id'=>'17','ket'=>'Melalui unit pengembangan karir dan penempatan kerja'],
            ['soal_id'=>'17','ket'=>'Mengiklankan diri sendiri ke internet'],
            ['soal_id'=>'17','ket'=>'Berwirausaha'],
            ['soal_id'=>'18','ket'=>'Ya'],
            ['soal_id'=>'18','ket'=>'Tidak'],
            ['soal_id'=>'18','ket'=>'Lainnya..'],
            ['soal_id'=>'19','ket'=>'Kurang dari 1.000.000,00'],
            ['soal_id'=>'19','ket'=>'1.000.000,00 -< 2.000.000,00'],
            ['soal_id'=>'19','ket'=>'2.000.000,00 -< 3.000.000,00'],
            ['soal_id'=>'19','ket'=>'3.000.000,00 -< 4.000.000,00'],
            ['soal_id'=>'19','ket'=>'4.000.000,00 -< 5.000.000,00'],
            ['soal_id'=>'19','ket'=>'> 5.000.000,00'],
            ['soal_id'=>'20','ket'=>'> Kurang dari 6 bulan'],
            ['soal_id'=>'20','ket'=>'> 6 - 12 bulan'],
            ['soal_id'=>'20','ket'=>'> 1 - 2 tahun'],
            ['soal_id'=>'20','ket'=>'> 2 - 3 tahun'],
            ['soal_id'=>'20','ket'=>'> 2 - 3 tahun'],
            ['soal_id'=>'20','ket'=>'Lebih dari 3 tahun'],
            ['soal_id'=>'21','ket'=>'pemerintah'],
            ['soal_id'=>'21','ket'=>'BUMN'],
            ['soal_id'=>'21','ket'=>'Swasta'],
            ['soal_id'=>'21','ket'=>'Wirausaha'],
            ['soal_id'=>'23','ket'=>'Kurang dari 1.000.000'],
            ['soal_id'=>'23','ket'=>'1.000.000 - < 2.000.000'],
            ['soal_id'=>'23','ket'=>'2.000.000 - < 3.000.000'],
            ['soal_id'=>'23','ket'=>'3.000.000 - < 4.000.000'],
            ['soal_id'=>'23','ket'=>'> 4.000.000'],
            ['soal_id'=>'24','ket'=>'Sesuai'],
            ['soal_id'=>'24','ket'=>'Tidak sesuai'],
            ['soal_id'=>'26','ket'=>'Ya'],
            ['soal_id'=>'26','ket'=>'Tidak'],

            //opsi soal 3
            ['soal_id'=>'31','ket'=>'Tidak ada kesulitan yang dihadapi'],
            ['soal_id'=>'31','ket'=>'Kurang latar belakang pendidikan (termasuk keterampilan teknis)'],
            ['soal_id'=>'31','ket'=>'Kesulitan untuk mendapatkan dana'],
            ['soal_id'=>'31','ket'=>'Kurang nya keterampilan kewirausahaan'],
            ['soal_id'=>'31','ket'=>'Kondisi pasar yang tidak memadai(Persaingan tinggi, permintaan rendah)'],
            ['soal_id'=>'31','ket'=>'Lokasi bisnis yang tidak ideal'],
        ]);
    }
}
