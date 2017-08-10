<?php $__env->startSection('editBeritaId', $berita->id); ?>
<?php $__env->startSection('editJudul', $berita->judul); ?>
<?php $__env->startSection('editIsi', $berita->isi); ?>
<?php $__env->startSection('editMethod'); ?>
	<?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.berita.tambah', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>