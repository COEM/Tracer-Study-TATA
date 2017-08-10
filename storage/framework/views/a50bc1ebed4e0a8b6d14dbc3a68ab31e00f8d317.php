<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('part.user.partial._slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('part.user.partial._mainBg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('part.user.partial._mainBtm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>