<?php $__env->startSection('content'); ?>
<section id="content_wrapper">
	<div class="mt30 timeline-single" id="timeline">
	    <div class="row">
	        <div class="col-sm-6 left-column">
	            <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	            	<div class="timeline-item">
		                <div class="timeline-icon">
	                        <span class="glyphicons glyphicons-edit text-warning"></span>
	                    </div>
		                <div class="panel">
		                	<div class="panel-heading">
		                        <span class="panel-title">
		                            <span class="glyphicon glyphicon-comment"></span>
		                            <a href="/alumni/<?php echo e($e->id); ?>/show"><?php echo e($e->judul); ?></a>
		                         </span>
		                        <div class="panel-header-menu pull-right mr10 text-muted fs12"> <?php echo e($e->created_at->diffForHumans()); ?> </div>
		                    </div>
		                    <?php if(strlen($e->gambar) > 0): ?>
		                    <div class="panel-body">
		                        <div class="row">
		                            <div class="col-xs-12">
		                                <a class="gallery-item" href="#">
	                                		<img src="/images/berita/<?php echo e($e->gambar); ?>" class="img-responsive" alt="">
		                                </a>
		                            </div>
		                        </div>
		                    </div>
		                    <?php endif; ?>
			                 <div class="panel">
			                    <div class="panel-body p10">
			                        <blockquote class="mbn ml10">
			                            <p>
			                            	<?php if(strlen($e->isi) >= 65): ?>
												<?php echo e(substr($e->isi, 0, 65)."..."); ?>

											<?php else: ?>
												<?php echo e($e->isi); ?>

											<?php endif; ?>
			                            </p>
			                        </blockquote>
			                    </div>
			                </div>
		                </div>
		            </div>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </div>
	    </div>
	    <center>
	    	<?php echo e($berita->links()); ?>

	    </center>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.alumni', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>