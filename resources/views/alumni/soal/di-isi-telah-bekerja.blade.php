{{-- use App\Opsi; --}}
@extends('layouts.alumni')
@section('content')
<section id="content_wrapper">
    <div id="content" class="animated fadeIn">
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
                                <label for="inputStandard" class="col-lg-0 control-label">{{$e->soal}}</label>
                                    @if ($e->type == "essay")
                                        <input type="text" id="inputStandard" class="form-control" value="@yield('editJudul')" name="{{str_slug($e->soal)}}">
                                    @elseif ($e->type == "opsi")
                                        @if ($e->soal == "Berapa gaji Saudara per bulan untuk pekerjaan Saudara saat ini ?")
                                            <table class="table">
                                                <tr>
                                                    <th></th>
                                                    <th>Pertama</th>
                                                    <th>Sekarang</th>
                                                    <th>Diharapkan</th>
                                                </tr>
                                            @foreach ($e->opsi as $o)
                                                <tr>
                                                    <td>{{$o->ket}}</td>
                                                    <td>
                                                        <div class="radio-custom mb5">
                                                            <input type="radio" name="{{str_slug($e->soal)}}[pertama]" id="{{str_slug($o->ket)}}-pertama" value="{{$o->ket}}">
                                                            <label for="{{str_slug($o->ket)}}-pertama"></label>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="radio-custom mb5">
                                                            <input type="radio" name="{{str_slug($e->soal)}}[sekarang]" id="{{str_slug($o->ket)}}-sekarang" value="{{$o->ket}}">
                                                            <label for="{{str_slug($o->ket)}}-sekarang"></label>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="radio-custom mb5">
                                                            <input type="radio" name="{{str_slug($e->soal)}}[diharapkanp]" id="{{str_slug($o->ket)}}-diharapkan" value="{{$o->ket}}">
                                                            <label for="{{str_slug($o->ket)}}-diharapkan"></label>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </table>
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
</section>
@stop