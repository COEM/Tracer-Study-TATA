<?php $__env->startSection('content'); ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="about details row">
			<h2><?php echo e($berita->judul); ?></h2>
			<img src="/assets/user/images/det_pic.jpg" alt="" class="img-responsive"/>
			<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			
		</div>
	</div>
</div><!-- end main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>