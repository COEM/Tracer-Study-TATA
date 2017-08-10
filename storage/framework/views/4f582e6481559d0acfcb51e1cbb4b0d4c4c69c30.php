<?php $__env->startSection('content'); ?>
<section id="content_wrapper">
	<div class="mt30 timeline-single" id="timeline">
	    <div class="row">
	        <div class="col-sm-6 left-column">
	            <div class="timeline-item">
	                <div class="timeline-icon">
                        <span class="glyphicons glyphicons-edit text-warning"></span>
                    </div>
	                <div class="panel">
	                	<div class="panel-heading">
	                        <span class="panel-title">
	                            <span class="glyphicon glyphicon-comment"></span>
	                            User Posting
	                         </span>
	                        <div class="panel-header-menu pull-right mr10 text-muted fs12"> July 30, 2013 </div>
	                    </div>
	                    <div class="panel-body">
	                        <div class="row">
	                            <div class="col-xs-12">
	                                <a class="gallery-item" href="assets/img/stock/9.jpg"><img src="assets/img/stock/4.jpg" class="img-responsive" alt="">
	                                </a>
	                            </div>
	                        </div>
	                    </div>
		                 <div class="panel">
		                    <div class="panel-body p10">
		                        <blockquote class="mbn ml10">
		                            <p>
		                            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat Lorem ipsum dolor sit amet, dolor sit amet lorem adpiz. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean felis sapien, vestibulum in dignissim vitae, condimentum eu nibh.
		                            </p>
		                        </blockquote>
		                    </div>
		                </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.alumni', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>