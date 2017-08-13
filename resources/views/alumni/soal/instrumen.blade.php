{{-- use App\Opsi; --}}
@extends('layouts.alumni')
@section('content')
<section id="content_wrapper">
    <div id="content" class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Standard Fields</span>
                </div>
                {{-- {{var_dump($kategori)}} --}}
                <div class="panel-body">
                    <form  action="/alumni/soal/Identitas Diri/@yield('editAlumniId')" class="form-horizontal" role="form" method="post">
                        {{csrf_field()}}
                        @section('editMethod')
                        @show
                        @foreach ($opsi as $e)
                            <div class="form-group">
                                <label for="inputStandard" class="col-lg-0">{{$e->soal}}</label>
                                    @if ($e->type == "essay")
                                        <input type="text" id="inputStandard" class="form-control" value="@yield('editJudul')" name="{{str_slug($e->soal)}}">
                                    @elseif ($e->type == "opsi")
                                            @if ($e->soal == "Menurut penilaian Bapak/Ibu/Saudara bagaimana kemampuan untuk setiap jenis keterampilan yang dimiliki oleh alumni Politeknik Negeri Pontianak yang bekerja di perusahaan/instansi Anda?")
                                                <table class="table">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Jenis Kemampuan</th>
                                                        <th>Sangat Baik</th>
                                                        <th>Baik</th>
                                                        <th>Cukup</th>
                                                        <th>Kurang</th>
                                                    </tr>
                                                    @foreach ($e->opsi as $o)
                                                        <tr>
                                                            <td>{{$loop->index + 1}}</td>
                                                            <td>{{$o->ket}}</td>
                                                            <td>
                                                                <div class="radio-custom mb5">
                                                                    <input type="radio" name="{{str_slug($e->soal)}}[{{$o->ket}}]" id="{{str_slug($o->ket)."-sangat-baik"}}" value="sangat baik">
                                                                    <label for="{{str_slug($o->ket."-sangat-baik")}}">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio-custom mb5">
                                                                    <input type="radio" name="{{str_slug($e->soal)}}[{{$o->ket}}]" id="{{str_slug($o->ket)."-baik"}}" value="baik">
                                                                    <label for="{{str_slug($o->ket."-baik")}}">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio-custom mb5">
                                                                    <input type="radio" name="{{str_slug($e->soal)}}[{{$o->ket}}]" id="{{str_slug($o->ket)."-cukup"}}" value="cukup">
                                                                    <label for="{{str_slug($o->ket."-cukup")}}">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio-custom mb5">
                                                                    <input type="radio" name="{{str_slug($e->soal)}}[{{$o->ket}}]" id="{{str_slug($o->ket)."-kurang"}}" value="kurang">
                                                                    <label for="{{str_slug($o->ket."-kurang")}}">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                                {{-- <hr> --}}
                                            @elseif ($e->soal == "Mohon diberikan komentar baik berupa harapan, saran atau kritik terhapad Politekik Negeri Pontianak khusus nya Prodi Teknik Informatika:" || $e->soal == "Berikan saran bagi peningkatan kualitas lulusan Program Studi kami supaya lebih dekat dengan kebutuhan/ tuntutan dunia kerja (mohon melihat dokumen akademik yang kami sertakan). Bapak/ Ibu dapat memanfaatkan halaman sebalik jika space berikut ini kurang")
                                                @foreach ($e->opsi as $o)
                                                    <i><label for="inputStandard" class="col-lg-0">{{$o->ket}}</label></i>
                                                    <input type="text" id="inputStandard" class="form-control" value="" name="{{str_slug($e->soal)}}[{{$o->ket}}]">
                                                @endforeach
                                            @elseif($e->soal == "Perlukah diadakan mata kuliah - mata kuliah pilihan baru/ keterampilan/ kompetensi tambahan untuk egantisipasi kemajuan di bidang yang Bapak/Ibu kelola?" || $e->soal == "Adakah alumni dari Jurusan kami yang bekerja pada lembaga bapak?" || $e->soal == "Jika saat ini tidak adaalumni kami yang bekerja pada lembaga ini, sebutkan alasannya")
                                                @foreach ($e->opsi as $o)
                                                    @if ($o->ket == "Perlu" || $o->ket == "Ada" || $o->ket == "Alasan lainnya")
                                                        <div class="radio-custom mb5">
                                                            <input type="radio" name="{{str_slug($e->soal)}}" id="{{str_slug($o->ket)}}" value="{{$o->ket}}">
                                                            <label for="{{str_slug($o->ket)}}">
                                                                {{title_case($o->ket)}}
                                                            </label>
                                                        </div>
                                                        <label for="">
                                                            Sebutkan :
                                                        </label>
                                                        <input type="text" id="inputStandard" class="form-control" value="" name="{{str_slug($e->soal)}}[{{$o->ket}}]">
                                                        <br>
                                                    @else
                                                        <div class="radio-custom mb5">
                                                            <input type="radio" name="{{str_slug($e->soal)}}" id="{{str_slug($o->ket)}}" value="{{$o->ket}}">
                                                            <label for="{{str_slug($o->ket)}}">
                                                                {{title_case($o->ket)}}
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($e->opsi as $o)
                                                    <div class="radio-custom mb5">
                                                        <input type="radio" name="{{str_slug($e->soal)}}" id="{{str_slug($o->ket)}}" value="{{$o->ket}}">
                                                        <label for="{{str_slug($o->ket)}}">
                                                            {{title_case($o->ket)}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endif
                            </div>
                        @endforeach
                        <div class="form-group">
                            <div class="col-lg-8">
                                <input type="submit" class="btn btn-info" value="Simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@stop