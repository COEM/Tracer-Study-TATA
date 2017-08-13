<?php $__env->startSection('content'); ?>
<div class="main_bg">
		<div class="container">
				<div class="main row">
				
					<div class="col-md-8 blog_left">
						<?php if(sizeof($berita) > 0): ?>
							<?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<h4><a href="index.php?proses=single-page"><?php echo e($e->judul); ?></a></h4>
								<a href="#"><img src="/images/berita/<?php echo e($e->gambar); ?>" alt="" class="blog_img img-responsive"/></a>
								<div class="blog_list">
									<ul class="list-unstyled">
										<li><i class="fa fa-calendar-o"></i><span><?php echo e($e->created_at->diffForHumans()); ?></span></li>
									</ul>
								</div>
								<?php if(strlen($e->isi) >= 90): ?>
									<p class="para"><?php echo e(substr($e->isi, 0, 90)."..."); ?></p>
								<?php else: ?>
									<p class="para"><?php echo e($e->isi); ?></p>
								<?php endif; ?>
								<div class="read_more">
									<a href="/agenda/<?php echo e($e->id); ?>/show" class="fa-btn btn-1 btn-1e">view more</a>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php else: ?>
							<center>
								<h4>Untuk saat ini belum ada konten tentang Agenda</h4>
							</center>
						<?php endif; ?>
					</div>
					<div class="col-md-4 blog_right">
						<!-- start social_network_likes -->
						<?php echo $__env->make('part.user.partial._sideBar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
					<div class="clearfix"></div>
					<?php echo e($berita->links()); ?>

				</div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>