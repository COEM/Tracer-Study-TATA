
@extends('layouts.user')

@section('content')
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="about details row">
			<h2>{{$berita->judul}}</h2>
			<img src="/images/berita/{{$berita->gambar}}" alt="" class="img-responsive"/>
			<p class="para">{{$berita->isi}}</p>
			{{-- <a href="#" class="fa-btn btn-1 btn-1e">read more</a> --}}
		</div>
	</div>
</div><!-- end main -->
@stop