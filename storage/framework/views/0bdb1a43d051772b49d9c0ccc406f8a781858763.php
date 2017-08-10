<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 14px;"><b>Login</b></div>
                        <br>
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                                <label for="username" class="col-md-4 control-label" style="font-size: 13px;">No. Induk Mahasiswa</label>
                                <div class="col-md-6">
                                    <input id="username" type="username" class="form-control" name="username" value="<?php echo e(old('username')); ?>" required autofocus>
                                    <?php if($errors->has('username')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('username')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="col-md-4 control-label" style="font-size: 13px;">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label style="font-size: 13px;">
                                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-danger">
                                        Login
                                    </button>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
     </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>