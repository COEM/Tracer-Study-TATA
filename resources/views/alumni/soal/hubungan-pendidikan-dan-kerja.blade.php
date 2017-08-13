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
                    <form  action="/alumni/soal/Di Isi Telah Bekerja/@yield('editAlumniId')" class="form-horizontal" role="form" method="post">
                        {{csrf_field()}}
                        @section('editMethod')
                        @show
                        @foreach ($opsi as $e)
                            <div class="form-group">
                                <label for="inputStandard" class="col-lg-0 ">{{$e->soal}}</label>
                                    @if ($e->type == "essay")
                                        <input type="text" id="inputStandard" class="form-control" value="@yield('editJudul')" name="{{str_slug($e->soal)}}">
                                    @elseif ($e->type == "opsi")
                                        @if ($e->soal == "Seberapa Pentingkah kualifikasi dan keterampilan yang saudara peroleh selama pendidikan untuk pekerjaan saudara saat ini ?" || $e->soal == "Berikan penilaian terhadap kondisi penyelenggaraan pendidikan dan pembelajaran pada program studi (kampus) Saudara. Diukur atas dasar kebutuhan di Pendidikan Tinggi.")
                                            <table class="table">
                                                <tr>
                                                    @for ($i = 1; $i <=5 ; $i++)
                                                        <th>{{$i}}</th>
                                                    @endfor
                                                    <th></th>
                                                </tr>
                                            @foreach ($e->opsi as $o)
                                            <tr>
                                                @for ($i = 1; $i <= 5 ; $i++)
                                                    <td>
                                                        <div class="radio-custom mb5">
                                                            <input type="radio" name="{{str_slug($e->soal)}}[{{str_slug($o->ket)}}]" id="{{str_slug($o->ket)."_".$e->id.$i}}" value="{{$i}}">
                                                            <label for="{{str_slug($o->ket)."_".$e->id.$i}}">
                                                            </label>
                                                        </div>
                                                    </td>
                                                @endfor
                                                <td>{{$o->ket}}</td>
                                            </tr>
                                            @endforeach
                                            </table>
                                            <hr>
                                        @else
                                            @foreach ($e->opsi as $o)
                                                <div class="radio-custom mb5">
                                                    <input type="radio" name="{{str_slug($e->soal)}}" id="{{str_slug($o->ket)."_".$e->id}}" value="{{$o->ket}}">
                                                    <label for="{{str_slug($o->ket)."_".$e->id}}">
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