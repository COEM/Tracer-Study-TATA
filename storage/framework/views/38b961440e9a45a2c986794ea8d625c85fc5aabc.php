<?php $__env->startSection('content'); ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="about details row">
			<h2><?php echo e($berita->judul); ?></h2>
			<img src="/images/berita/<?php echo e($berita->gambar); ?>" alt="" class="img-responsive"/>
			<p class="para"><?php echo e($berita->isi); ?></p>
			
		</div>
	</div>
</div><!-- end main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>