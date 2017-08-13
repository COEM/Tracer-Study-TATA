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
                    <form  action="/alumni/soal/Identitas Diri/@yield('editAlumniId')" class="form-horizontal" role="form" method="post">
                        {{csrf_field()}}
                        @section('editMethod')
                        @show
                        @foreach ($opsi as $e)
                            <div class="form-group">
                                <label for="inputStandard" class="col-lg-0 control-label">{{$e->soal}}</label>
                                    @if ($e->type == "essay")
                                        <input type="text" id="inputStandard" class="form-control" value="@yield('editJudul')" name="{{str_slug($e->soal)}}">
                                    @elseif ($e->type == "opsi")
                                            @foreach ($e->opsi as $o)
                                                <div class="radio-custom mb5">
                                                    <input type="radio" name="{{str_slug($e->soal)}}" id="{{str_slug($o->ket)}}" value="{{$o->ket}}">
                                                    <label for="{{str_slug($o->ket)}}">
                                                        {{title_case($o->ket)}}
                                                    </label>
                                                </div>
                                            @endforeach
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