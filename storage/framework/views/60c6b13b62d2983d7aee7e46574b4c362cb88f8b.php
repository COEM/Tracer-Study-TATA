<?php $__env->startSection('content'); ?>
<section id="content_wrapper">
    <div id="content" class="animated fadeIn">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Standard Fields</span>
                </div>
                
                <div class="panel-body">
                    <form  action="/alumni/soal/Pendapatan Primer atau Sekunder/<?php echo $__env->yieldContent('editAlumniId'); ?>" class="form-horizontal" role="form" method="post">
                        <?php echo e(csrf_field()); ?>

                        <?php $__env->startSection('editMethod'); ?>
                        <?php echo $__env->yieldSection(); ?>
                        <?php $__currentLoopData = $opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group">
                                <label for="inputStandard" class="col-lg-0 control-label"><?php echo e($e->soal); ?></label>
                                <?php if($e->type == "essay"): ?>
                                    <input type="text" id="inputStandard" class="form-control" value="<?php echo $__env->yieldContent('editJudul'); ?>" name="<?php echo e(str_slug($e->soal)); ?>">
                                <?php elseif($e->type == "opsi"): ?>
                                    <?php $__currentLoopData = $e->opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="radio-custom mb5">
                                            <input type="radio" name="<?php echo e(str_slug($e->soal)); ?>" id="<?php echo e(str_slug($o->ket)."_".$e->id); ?>" value="<?php echo e($o->ket); ?>">
                                            <label for="<?php echo e(str_slug($o->ket)."_".$e->id); ?>">
                                                <?php echo e(title_case($o->ket)); ?>

                                            </label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group">
                            <div class="col-lg-8">
                                <input type="submit" class="btn btn-info" value="Simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.alumni', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>