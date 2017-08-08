@extends('layouts.admin')

@section('content')
<!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        <!-- Begin: Content -->

        <section id="content" class="table-layout animated fadeIn">
            <div class="tray tray-center p40 va-t posr">
            <a href="/admin/soal/create" class="btn btn-info" role="button">Tambah Soal</a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-visible" id="spy2">
                            <div class="panel-heading">
                                <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Data Soal Tracer-Study</div>
                            </div>
                            <div class="panel-body pn">
                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Soal</th>
                                            <th>Tipe</th>
                                            {{-- <th>Opsi</th> --}}
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($soal as $e)
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{!!$e->soal!!}</td>
                                                @if ($e->type === "opsi")
                                                   <td>
                                                        <a href="/admin/soal/{{$e->id}}/show">
                                                        {{-- <center> --}}
                                                            <button type="button" class="btn btn-warning btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                Opsi
                                                            </button>
                                                        {{-- </center> --}}
                                                    </a>
                                                   </td>
                                                @else
                                                    <td>
                                                        <a href="/admin/soal/{{$e->id}}/show">
                                                        {{-- <center> --}}
                                                            <button type="button" class="btn btn-success btn-sm">
                                                                <i class="fa fa-question" aria-hidden="true"></i>
                                                                Essay
                                                            </button>
                                                        {{-- </center> --}}
                                                    </a>
                                                   </td>
                                                @endif
                                                <td>
                                                    <a href="/admin/soal/{{$e->id}}/edit">
                                                        <center>
                                                            <button type="button" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </button>
                                                        </center>
                                                    </a>
                                                </td>


                                                <td>
                                                    <center>
                                                        <form class="" action="/admin/soal/{{$e->id}}" method="post" id="{{$e->id}}">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                                <span class="glyphicon glyphicon-remove"></span>
                                                            </button>
                                                        </form>
                                                    </center>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop
