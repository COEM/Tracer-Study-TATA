@extends('layouts.user')

@section('content')
<div class="main_bg">
		<div class="container">
				<div class="main row">
				{{-- <div class="col-md-8 blog_left"> --}}
					<div class="col-md-8 blog_left">
						@if (sizeof($berita) > 0)
							@foreach ($berita as $e)
								<h4><a href="index.php?proses=single-page">{{$e->judul}}</a></h4>
								<a href="#"><img src="/images/berita/{{$e->gambar}}" alt="" class="blog_img img-responsive"/></a>
								<div class="blog_list">
									<ul class="list-unstyled">
										<li><i class="fa fa-calendar-o"></i><span>{{$e->created_at->diffForHumans()}}</span></li>
									</ul>
								</div>
								@if (strlen($e->isi) >= 90)
									<p class="para">{{substr($e->isi, 0, 90)."..."}}</p>
								@else
									<p class="para">{{$e->isi}}</p>
								@endif
								<div class="read_more">
									<a href="/agenda/{{$e->id}}/show" class="fa-btn btn-1 btn-1e">view more</a>
								</div>
							@endforeach
						@else
							<center>
								<h4>Untuk saat ini belum ada konten tentang Agenda</h4>
							</center>
						@endif
					</div>
					<div class="col-md-4 blog_right">
						<!-- start social_network_likes -->
						@include('part.user.partial._sideBar')
					</div>
					<div class="clearfix"></div>
					{{$berita->links()}}
				</div>
		</div>
</div>
@stop