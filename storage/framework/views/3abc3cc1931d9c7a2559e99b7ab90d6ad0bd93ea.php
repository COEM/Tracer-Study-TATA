<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->make('part.user._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
    <div class="container">
        <?php echo $__env->make('part.user._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="container">
        <div class="col-md-12">
            <?php echo $__env->make('part.user._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('part.user._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('part.user._script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>