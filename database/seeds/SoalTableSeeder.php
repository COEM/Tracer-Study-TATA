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

            //soal kategori 3
            ['soal'=>'Berapa banyak orang yang saudara pekerjakan dalam usaha selain diri anda sendiri?','type'=>'essay','kategori_id' => 3],
            ['soal'=>'Apakah saudara memulai usaha secara mandiri atau dengan keluarga atau pasangan anda?','type'=>'essay','kategori_id' => 3],
            ['soal'=>'Apakah saudara menerima kredit untuk memulai bisnis andadan jika ya, berapa bnyak kredit yang saudara terima?','type'=>'essay','kategori_id' => 3],
            ['soal'=>'Apakah saudara menemui kesulitan ketika memulai usaha sendiri?','type'=>'opsi','kategori_id' => 3],

            //soal kategori 4
            ['soal'=>'Mata pelajaran utama lembaga pelatihan/pendidikan tinggi yang saudara tempuh?','type'=>'essay','kategori_id' => 4],
            ['soal'=>'Nama dan tempat lembaga pelatihan/pendidikan tinggi yang saudara tempuh?','type'=>'essay','kategori_id' => 4],
            ['soal'=>'Gelar apa yang anda dapatkan dar mengikuti lembaga pelatihan atau perguruan tinggi?','type'=>'opsi','kategori_id' => 4],
            ['soal'=>'Apakah rencana yang saudara lakukan setelah menyelesaikan studi?','type'=>'opsi','kategori_id' => 4],

            //soal kategori 5
            ['soal'=>'Apakah saudara pernah bekerja sebelumnya?','type'=>'opsi','kategori_id' => 5],
            ['soal'=>'Apabila saudara pernah bekerja, bidang usaha apa lembaga tempat saudara bekerja?','type'=>'essay','kategori_id' => 5],
            ['soal'=>'Setelah lulus atau berhenti bekerja, sudah berapa lama saudara tidak bekerja?','type'=>'opsi','kategori_id' => 5],
            ['soal'=>'Apakah saudara tertarik untuk mendapatkan pekerjaan','type'=>'opsi','kategori_id' => 5],
            ['soal'=>'Apa alasan saudara belum mendapatkan pekerjaan saat ini? (silahkan pilih maksimal dua buah)','type'=>'opsi','kategori_id' => 5],

            //soal kategori 6
            ['soal'=>'Apakah selama mengikuti pendidikan saudara telah memiliki pendapatan perbulan?','type'=>'opsi','kategori_id' => 6],
            ['soal'=>'Apabila saudara telah memiliki pendapatan bersih perbulan selama pendidikan, berapa rata-rata pendapatan saudara perbulan','type'=>'essay','kategori_id' => 6],
            ['soal'=>'Yang merupakan kontributor utama untuk pendapatan rumah tangga saudara sebelum dan pada saat pendidikan?','type'=>'opsi','kategori_id' => 6],
            ['soal'=>'Berapa pendapatan bersih bulanan saat ini? Dihitung berdasarkan pendapatan dari pekerjaan utama anda dan pekerjaan tambahan (jika ada)','type'=>'essay','kategori_id' => 6],
            ['soal'=>'Apakah saudara mendapatkan tambahan pembayaran dalam bentuk selain uang?','type'=>'opsi','kategori_id' => 6],
            ['soal'=>'Apakah kondisi hidup saudara membaik, memburuk atau tetap sama setelah lulus pendidikan?','type'=>'opsi','kategori_id' => 6],

            //soal kategori 7
            ['soal'=>'Apakah pekerjaan anda saat ini terkait dengan jurusan / program studi pada saat anda pendidikan?','type'=>'opsi','kategori_id' => 7],
            ['soal'=>'Seberapa Pentingkah kualifikasi dan keterampilan yang saudara peroleh selama pendidikan untuk pekerjaan saudara saat ini ?','type'=>'opsi','kategori_id' => 7],
            ['soal'=>'Berikan penilaian terhadap kondisi penyelenggaraan pendidikan dan pembelajaran pada program studi (kampus) Saudara. Diukur atas dasar kebutuhan di Pendidikan Tinggi.','type'=>'opsi','kategori_id' => 7],

            //soal kategori 8
            ['soal'=>'Nama','type'=>'essay','kategori_id' => 8],
            ['soal'=>'Jabatan','type'=>'essay','kategori_id' => 8],
            ['soal'=>'Instansi/Lembaga','type'=>'essay','kategori_id' => 8],
            ['soal'=>'No. Telepon','type'=>'essay','kategori_id' => 8],
            ['soal'=>'No. Faximile','type'=>'essay','kategori_id' => 8],
            ['soal'=>'E-mail','type'=>'essay','kategori_id' => 8],
            ['soal'=>'lembaga yang Bapak/Ibu kelola bergerak dalam bidang apa?','type'=>'opsi','kategori_id' => 8],
            ['soal'=>'Adakah alumni dari Jurusan kami yang bekerja pada lembaga bapak?','type'=>'opsi','kategori_id' => 8],
            ['soal'=>'Jika saat ini tidak ada alumni kami yang bekerja pada lembaga ini, sebutkan alasannya','type'=>'opsi','kategori_id' => 8],
            ['soal'=>'Bagaimana kinerja alumni menurut Bapak/Ibu','type'=>'opsi','kategori_id' => 8],
            ['soal'=>'Menurut penilaian Bapak/Ibu/Saudara bagaimana kemampuan untuk setiap jenis keterampilan yang dimiliki oleh alumni Politeknik Negeri Pontianak yang bekerja di perusahaan/instansi Anda?','type'=>'opsi','kategori_id' => 8],
            ['soal'=>'Mohon diberikan komentar baik berupa harapan, saran atau kritik terhapad Politekik Negeri Pontianak khusus nya Prodi Teknik Informatika:','type'=>'opsi','kategori_id' => 8],
            // ['soal'=>'Kelebihan/Kekuatan Alumni :','type'=>'essay','kategori_id' => 8],
            // ['soal'=>'Kritik dan Saran untuk Alumni Polteknik Negeri Pontianak khususnya Prodi TI:','type'=>'essay','kategori_id' => 8],
            ['soal'=>'Perlukah diadakan mata kuliah - mata kuliah pilihan baru/ keterampilan/ kompetensi tambahan untuk egantisipasi kemajuan di bidang yang Bapak/Ibu kelola?','type'=>'opsi','kategori_id' => 8],
            ['soal'=>'Tuliskan saran-saran umum Bapak/Ibu demi perbaika program studi kami yang berkaitan dengan peningkatan kualitas lulusannya','type'=>'essay','kategori_id' => 8],
            ['soal'=>'Berikan saran bagi peningkatan kualitas lulusan Program Studi kami supaya lebih dekat dengan kebutuhan/ tuntutan dunia kerja (mohon melihat dokumen akademik yang kami sertakan). Bapak/ Ibu dapat memanfaatkan halaman sebalik jika space berikut ini kurang','type'=>'opsi','kategori_id' => 8]
        ]);
    }
}