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

            //opsi soal ke 4
            ['soal_id'=>'34','ket'=>'Gelar pelatihan kejuruan'],
            ['soal_id'=>'34','ket'=>'Gelar Sarjana'],
            ['soal_id'=>'34','ket'=>'Gelar Ahli Madya/Sarjana Muda'],
            ['soal_id'=>'34','ket'=>'Lainnya..'],

            ['soal_id'=>'35','ket'=>'Mencari pekerjaan'],
            ['soal_id'=>'35','ket'=>'Memulai Bisnis'],
            ['soal_id'=>'35','ket'=>'Bekerja untuk keluarga atau kerabat saya'],
            ['soal_id'=>'35','ket'=>'Bermigrasi keluar negeri untuk mencari pekerjaan'],
            ['soal_id'=>'35','ket'=>'Melanjutkan pekerjaan saat ini'],
            ['soal_id'=>'35','ket'=>'Keluarga/Perawatan rumah tangga'],
            ['soal_id'=>'35','ket'=>'Lainnya...'],

            //opsi soal 5
            ['soal_id'=>'36','ket'=>'Pernah'],
            ['soal_id'=>'36','ket'=>'Belum pernah'],

            ['soal_id'=>'38','ket'=>'kurang dari 3 bulan'],
            ['soal_id'=>'38','ket'=>'3-6 bulan
'],
            ['soal_id'=>'38','ket'=>'6 -12 bulan'],
            ['soal_id'=>'38','ket'=>'1-2 tahun'],
            ['soal_id'=>'38','ket'=>'Lebih dari 2 tahun'],

            ['soal_id'=>'39','ket'=>'Ya'],
            ['soal_id'=>'39','ket'=>'Tidak'],

            ['soal_id'=>'40','ket'=>'Kelangkaan pekerjaan'],
            ['soal_id'=>'40','ket'=>'Kurangnya networking'],
            ['soal_id'=>'40','ket'=>'Kurangnya pengalaman, kualifikasi, atau keterampilan'],
            ['soal_id'=>'40','ket'=>'Kurangnya sumber daya (misalnya modal berupa alat ataupun uang)'],
            ['soal_id'=>'40','ket'=>'Kurangnya percaya diri'],
            ['soal_id'=>'40','ket'=>'Masalah gender, agama, ras, suku, atau pandangan politik.'],
            ['soal_id'=>'40','ket'=>'Pengasuh anak'],
            ['soal_id'=>'40','ket'=>'Lainnya'],

            ['soal_id'=>'41','ket'=>'Ya'],
            ['soal_id'=>'41','ket'=>'Tidak'],

            ['soal_id'=>'43','ket'=>'Diri saya sendiri'],
            ['soal_id'=>'43','ket'=>'Ayah dan Ibu'],
            ['soal_id'=>'43','ket'=>'Ayah dan Ibu saja'],
            ['soal_id'=>'43','ket'=>'Saudara kandung (kakak dan adik)'],
            ['soal_id'=>'43','ket'=>'Bukan saudara kandung (kakek, paman, dll)'],

            ['soal_id'=>'45','ket'=>'Ya'],
            ['soal_id'=>'45','ket'=>'Tidak'],

            ['soal_id'=>'46','ket'=>'Meningkat'],
            ['soal_id'=>'46','ket'=>'Tidak ada perbedaan'],
            ['soal_id'=>'46','ket'=>'Memburuk'],

            ['soal_id'=>'47','ket'=>'Ya'],
            ['soal_id'=>'47','ket'=>'Tidak'],

            ['soal_id'=>'48','ket'=>'Keterampilan kejuruan praktis yang diperoleh selama pendidikan'],
            ['soal_id'=>'48','ket'=>'Keterampilan teori kejuruan yang diperoleh selama pelatihan'],
            ['soal_id'=>'48','ket'=>'Keterampilan wiraswasta'],
            ['soal_id'=>'48','ket'=>'Pelayanan/ bimbingan Dosen terhadap Mahasiswa'],
            ['soal_id'=>'48','ket'=>'Bahasa Inggris/ Pemrograman/ Jaringan/ Basis Data'],

            ['soal_id'=>'49','ket'=>'Kegiatan akademik secara umum'],
            ['soal_id'=>'49','ket'=>'Isi pembelajaran'],
            ['soal_id'=>'49','ket'=>'Kompetensi dosen'],
            ['soal_id'=>'49','ket'=>'Pelayanan/ bimbingan Dosen'],
            ['soal_id'=>'49','ket'=>'Isi pelajaran teori'],
            ['soal_id'=>'49','ket'=>'Isi pelajaran praktikum'],
            ['soal_id'=>'49','ket'=>'Kualitas pembelajaran'],
            ['soal_id'=>'49','ket'=>'Sistem penilaian'],
            ['soal_id'=>'49','ket'=>'Kesempatan terlibat dalam proyek'],
            ['soal_id'=>'49','ket'=>'Kualitas sarana dan prasarana akademik'],
            ['soal_id'=>'49','ket'=>'Kesempatan untuk memperoleh pengalaman kerja (praktek)'],
            ['soal_id'=>'49','ket'=>'Suasana akademik'],
            ['soal_id'=>'49','ket'=>'Fasilitas dan kumpulan buku pada perpustakaan'],

            //opsi soal kategori 8
            ['soal_id'=>'56','ket'=>'Pendidikan'],
            ['soal_id'=>'56','ket'=>'Industri'],
            ['soal_id'=>'56','ket'=>'Jasa'],
            ['soal_id'=>'56','ket'=>'Perdagangan / Bisnis'],
            ['soal_id'=>'56','ket'=>'Pertanian'],
            ['soal_id'=>'56','ket'=>'Kebudayaan dan pariwisata'],
            ['soal_id'=>'56','ket'=>'Lainnya'],

            ['soal_id'=>'57','ket'=>'Ada'],
            ['soal_id'=>'57','ket'=>'Tidak ada'],

            ['soal_id'=>'58','ket'=>'Tidak ada yang melamar'],
            ['soal_id'=>'58','ket'=>'Kalah bersaing'],
            ['soal_id'=>'58','ket'=>'Alasan lainnya'],

            ['soal_id'=>'59','ket'=>'Sangat Baik'],
            ['soal_id'=>'59','ket'=>'Baik'],
            ['soal_id'=>'59','ket'=>'Sedang'],
            ['soal_id'=>'59','ket'=>'Jelek'],

            ['soal_id'=>'60','ket'=>'Integritas (Etika dan moral)'],
            ['soal_id'=>'60','ket'=>'Keahlian berdasarkan bidang ilmu (professionalisme)'],
            ['soal_id'=>'60','ket'=>'Bahasa Inggris'],
            ['soal_id'=>'60','ket'=>'Penggunaan teknologi informasi'],
            ['soal_id'=>'60','ket'=>'Komunikasi'],
            ['soal_id'=>'60','ket'=>'Kerjasama tim'],
            ['soal_id'=>'60','ket'=>'Pengembangan diri'],

            ['soal_id'=>'61','ket'=>'Komentar umum'],
            ['soal_id'=>'61','ket'=>'Kelebihan/Kekuatan Alumni '],
            ['soal_id'=>'61','ket'=>'Kritik dan Saran untuk Alumni Polteknik Negeri Pontianak khususnya Prodi TI'],

            ['soal_id'=>'62','ket'=>'Perlu'],
            ['soal_id'=>'62','ket'=>'Tidak perlu'],

            ['soal_id'=>'64','ket'=>'Fasilitas/Laboraturium'],
            ['soal_id'=>'64','ket'=>'Kualitas Dosen'],
            ['soal_id'=>'64','ket'=>'Kurikulum'],
        ]);
    }
}
