@extends('layouts.alumni')
@section('content')
<section id="content_wrapper">
	<div class="mt30 timeline-single" id="timeline">
	    <div class="row">
	        <div class="col-sm-6 left-column">
	        <div class="timeline-divider mtn">
	                {{-- <div class="divider-label"><a href="" class="btn-link">Tambah Berita</a></div> --}}
	                <div class="pull-right">
	                    <a href="/alumni/lowker/create" class="btn btn-success">Tambah Lowongan Kerja</a>
	                </div>
	            </div>
	            @foreach ($lowker as $e)
	            	<div class="timeline-item">
		                <div class="timeline-icon">
	                        <span class="glyphicons glyphicons-edit text-warning"></span>
	                    </div>
		                <div class="panel">
		                	<div class="panel-heading">
		                        <span class="panel-title">
		                            <span class="glyphicon glyphicon-comment"></span>
		                            <a href="/alumni/lowker/{{$e->id}}/show">{{$e->judul}}</a>
		                         </span>
		                        <div class="panel-header-menu pull-right mr10 text-muted fs12"> {{$e->created_at->diffForHumans()}} </div>
		                    </div>
		                    @if (strlen($e->gambar) > 0)
		                    <div class="panel-body">
		                        <div class="row">
		                            <div class="col-xs-12">
		                                <a class="gallery-item" href="#">
	                                		<img src="/images/lowker/{{$e->gambar}}" class="img-responsive" alt="">
		                                </a>
		                            </div>
		                        </div>
		                    </div>
		                    @endif
			                 <div class="panel">
			                    <div class="panel-body p10">
			                        <blockquote class="mbn ml10">
			                            <p>
			                            	@if (strlen($e->isi) >= 65)
												{{substr($e->isi, 0, 65)."..."}}
											@else
												{{$e->isi}}
											@endif
			                            </p>
			                        </blockquote>
			                    </div>
			                </div>
		                </div>
		            </div>
	            @endforeach
	        </div>
	    </div>
	    <center>
	    	{{$lowker->links()}}
	    </center>
	</div>
	</section>
@stop