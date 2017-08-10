<?php $__env->startSection('editAlumniId', $alumni->id); ?>
<?php $__env->startSection('editNim', $alumni->nim); ?>
<?php $__env->startSection('editNama', $alumni->nama); ?>
<?php $__env->startSection('editAlamat', $alumni->alamat); ?>
<?php $__env->startSection('editThMasuk', $alumni->tahun_masuk); ?>
<?php $__env->startSection('editThKeluar', $alumni->tahun_keluar); ?>
<?php $__env->startSection('editProdi', $alumni->prodi); ?>
<?php $__env->startSection('editNoTelp', $alumni->no_telp); ?>

<?php $__env->startSection('editMethod'); ?>
	<?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.alumni.tambah', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>