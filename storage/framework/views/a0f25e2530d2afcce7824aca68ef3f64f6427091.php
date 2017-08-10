<?php $__env->startSection('content'); ?>
<!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        <!-- Begin: Content -->

        <section id="content" class="table-layout animated fadeIn">
            <div class="tray tray-center p40 va-t posr">
            <a href="/admin/soal/create" class="btn btn-info" role="button">Tambah Soal</a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-visible" id="spy2">
                            <div class="panel-heading">
                                <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Data Soal Tracer-Study</div>
                            </div>
                            <div class="panel-body pn">
                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Soal</th>
                                            <th>Tipe</th>
                                            
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $soal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td><?php echo $e->soal; ?></td>
                                                <?php if($e->type === "opsi"): ?>
                                                   <td>
                                                        <a href="/admin/soal/<?php echo e($e->id); ?>/show">
                                                        
                                                            <button type="button" class="btn btn-warning btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                Opsi
                                                            </button>
                                                        
                                                    </a>
                                                   </td>
                                                <?php else: ?>
                                                    <td>
                                                        <a href="/admin/soal/<?php echo e($e->id); ?>/show">
                                                        
                                                            <button type="button" class="btn btn-success btn-sm">
                                                                <i class="fa fa-question" aria-hidden="true"></i>
                                                                Essay
                                                            </button>
                                                        
                                                    </a>
                                                   </td>
                                                <?php endif; ?>
                                                <td>
                                                    <a href="/admin/soal/<?php echo e($e->id); ?>/edit">
                                                        <center>
                                                            <button type="button" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </button>
                                                        </center>
                                                    </a>
                                                </td>


                                                <td>
                                                    <center>
                                                        <form class="" action="/admin/soal/<?php echo e($e->id); ?>" method="post" id="<?php echo e($e->id); ?>">
                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field('DELETE')); ?>

                                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                                <span class="glyphicon glyphicon-remove"></span>
                                                            </button>
                                                        </form>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>