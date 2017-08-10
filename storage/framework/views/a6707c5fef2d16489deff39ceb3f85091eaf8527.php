<?php $__env->startSection('body','external-page sb-l-c sb-r-c'); ?>
<?php $__env->startSection('content'); ?>
    <section id="content_wrapper">
        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>
        <section id="content">
            <div class="admin-form theme-info" id="login1">
                <div class="panel panel-info mtsr-n">
                    <div class="panel-heading heading-border bg-white">
                        <span class="panel-title hidden"><i class="fa fa-sign-in"></i>Register</span>
                    </div>
                    <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col-sm-12 pr30">
                                    <div class="section">
                                        <label for="username" class="field-label text-muted fs18 mb10">E-Mail</label>
                                        <label for="username" class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input" placeholder="Enter E-Mail" value="<?php echo e(old('email')); ?>">
                                            <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="section">
                                        <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                                        <label for="password" class="field prepend-icon">
                                            <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password" required>
                                            <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer clearfix p10 ph15">
                            <button type="submit" class="button btn-primary mr10">Login</button>
                            <button type="submit" class="button btn-danger mr10">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>