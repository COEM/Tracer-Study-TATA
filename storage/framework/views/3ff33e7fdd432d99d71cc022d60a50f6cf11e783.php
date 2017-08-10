<?php $__env->startSection('content'); ?>
<!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        <!-- Begin: Content -->

        <section id="content" class="table-layout animated fadeIn">
            <div class="tray tray-center p40 va-t posr">
            <a href="/admin/berita/create" class="btn btn-info" role="button">Tambah Berita</a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-visible" id="spy2">
                            <div class="panel-heading">
                                <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Data Berita</div>
                            </div>
                            <div class="panel-body pn">
                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Berita</th>
                                            <th>Gambar</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td><?php echo e($e->judul); ?></td>
                                                
                                                <td><?php echo substr($e->isi, 0, 10)."..."; ?></td>
                                                <td><img src="/images/berita/<?php echo e($e->gambar); ?>" width="150"></td>
                                                <td>
                                                <?php if($e->status): ?>
                                                    <a href="" class="btn btn-success">Post</a>
                                                <?php else: ?>
                                                    <a href="/admin/berita/<?php echo e($e->id); ?>/post" class="btn btn-warning">Pending</a>
                                                <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="/admin/berita/<?php echo e($e->id); ?>/edit">
                                                        <center>
                                                            <button type="button" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </button>
                                                        </center>
                                                    </a>
                                                </td>


                                                <td>
                                                    <center>
                                                        <form class="" action="/admin/berita/<?php echo e($e->id); ?>" method="post" id="<?php echo e($e->id); ?>">
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