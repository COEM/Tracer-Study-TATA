<?php $__env->startSection('editLowkerId', $lowker->id); ?>
<?php $__env->startSection('editJudul', $lowker->judul); ?>
<?php $__env->startSection('editIsi', $lowker->isi); ?>
<?php $__env->startSection('editMethod'); ?>
	<?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lowker.tambah', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>