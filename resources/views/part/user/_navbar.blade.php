<div class="row h_menu">
  <nav class="navbar navbar-default navbar-left" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{-- active --}}"><a href="/">Beranda</a></li>
        <li><a href="/tentang">Tentang Polnep</a></li>
        <li><a href="/agenda">Agenda</a></li>
        <li><a href="/lowker">Lowongan Pekerjaan</a></li>
        <li><a href="/kontak">Kontak</a></li>
        <li><a href="{{ route('login')}}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
      <!-- start soc_icons -->
    </nav>
    <div class="soc_icons navbar-right">
      <ul class="list-unstyled text-center">
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        {{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
      </ul>
    </div>
  </div>
