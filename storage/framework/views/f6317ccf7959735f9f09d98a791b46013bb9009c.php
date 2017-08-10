<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->make('part.general._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="<?php echo $__env->yieldContent('body', ''); ?>">
    <div id="main">
        <?php if(Auth::user()): ?>
           <?php echo $__env->make('part.admin._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           <?php echo $__env->make('part.admin._side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
            
                <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('part.general._foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>