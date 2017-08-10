@extends('layouts.admin')
@section('body','admin-elements-page')
@section('content')
<section id="content_wrapper">
    <div id="content" class="animated fadeIn">
        <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Standard Fields</span>
                </div>
                <div class="panel-body">
                    <form  action="/admin/soal/@yield('editSoalId')" class="form-horizontal" role="form" method="post">
                    {{csrf_field()}}
                    @section('editMethod')
                    @show
                        <div class="form-group">
                            <label class="col-lg-3 control-label" for="textArea2">Soal :</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="soal" rows="10" name="soal">@yield('editSoal')</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Tipe Soal</label>
                            <div class="col-lg-8">
                             {{--    <select class="form-control m-b" name="type">
                                    <option value="@yield('editTipeSoal')">@yield('editTipeSoal','Pilih tipe soal')</option>
                                    <option value="essay">Essay</option>
                                    <option value="opsi">Opsi</option>
                                </select> --}}
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Essay</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Opsi</a></li>
                                  </ul>

                                  <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                      <div class="container">
{{--                                         <h3>Essay</h3>
                                      <p>ini essay</p> --}}
                                      </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="col-lg-8">
                                            <div class="input_fields_wrap">
                                                <button class="add_field_button btn btn-success">Tambah Opsi</button>
                                                {{-- <div>
                                                    <input class="form-control" type="text" name="opsi[]">
                                                    <a href="#" class="remove_field btn btn-danger">Hapus</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                  </div>
                            </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label" for="textArea2">Isi Berita</label>
                            <div class="col-lg-8">
                                <select class="form-control m-b" name="kategori_id">
                                <option value="@yield('editIdKategori')">@yield('editKategori','Pilih Kategori soal')</option>
                                @foreach ($kategori as $e)
                                    <option value="{{$e->id}}">{{$e->kategori}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        </div>

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
