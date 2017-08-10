<?php $__env->startSection('editSoalId', $soal->id); ?>
<?php $__env->startSection('editSoal', $soal->soal); ?>

<?php $__env->startSection('editMethod'); ?>
	<?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.soal.tambah', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>