@extends('layouts.admin')

@section('content')
<!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        <!-- Begin: Content -->

        <section id="content" class="table-layout animated fadeIn">
            <div class="tray tray-center p40 va-t posr">
            <a href="/admin/berita/create" class="btn btn-info" role="button">Atur Jadwal</a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-visible" id="spy2">
                            <div class="panel-heading">
                                <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Data Berita</div>
                            </div>
                            <div class="panel-body pn">
                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Berita</th>
                                            <th>Gambar</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($berita as $e)
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$e->judul}}</td>
                                                {{-- {{  }} --}}
                                                <td>{!!substr($e->isi, 0, 10)."..."!!}</td>
                                                <td><img src="/images/berita/{{$e->gambar}}" width="150"></td>
                                                <td>
                                                @if ($e->status)
                                                    <a href="" class="btn btn-success">Post</a>
                                                @else
                                                    <a href="/admin/berita/{{$e->id}}/post" class="btn btn-warning">Pending</a>
                                                @endif
                                                </td>
                                                <td>
                                                    <a href="/admin/berita/{{$e->id}}/edit">
                                                        <center>
                                                            <button type="button" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </button>
                                                        </center>
                                                    </a>
                                                </td>


                                                <td>
                                                    <center>
                                                        <form class="" action="/admin/berita/{{$e->id}}" method="post" id="{{$e->id}}">
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
