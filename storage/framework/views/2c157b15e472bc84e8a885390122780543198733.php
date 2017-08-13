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
        <li class=""><a href="/">Beranda</a></li>
        <li><a href="/tentang">Tentang Polnep</a></li>
        <li><a href="/agenda">Agenda</a></li>
        <li><a href="/lowker">Lowongan Pekerjaan</a></li>
        <li><a href="/kontak">Kontak</a></li>
        <?php if(Auth::user()): ?>
          <li><a href="/dash">Dashboard</a></li>
          <li><a href="<?php echo e(route('logout')); ?>" class="fw600 p12 animated animated-short fadeInDown"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Logout</li>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
        <?php else: ?>
          <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
          <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
        <?php endif; ?>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
      <!-- start soc_icons -->
    </nav>
    
      
        
        
        
        
        <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
      
    
  </div>
