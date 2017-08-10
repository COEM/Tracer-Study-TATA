<?php $__env->startSection('content'); ?>
<!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        <!-- Begin: Content -->

        <section id="content" class="table-layout animated fadeIn">
            <div class="tray tray-center p40 va-t posr">
            <a href="/admin/alumni/create" class="btn btn-info" role="button">Tambah Berita</a>
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
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>Tahun Masuk</th>
                                            <th>Tahun Lulus</th>
                                            <th>Prodi</th>
                                            <th>No. Telp</th>
                                            <th>Foto</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td><?php echo e($e->nim); ?></td>
                                                <td><?php echo e($e->nama); ?></td>
                                                <td><?php echo e($e->ttl); ?></td>
                                                <td><?php echo e($e->alamat); ?></td>
                                                <td><?php echo e($e->tahun_masuk); ?></td>
                                                <td><?php echo e($e->tahun_keluar); ?></td>
                                                <td><?php echo e($e->prodi); ?></td>
                                                <td><?php echo e($e->no_telp); ?></td>
                                                <td><?php echo e(substr($e->avatar, 0, 5)."..."); ?></td>
                                                <td><a href="/admin/alumni/<?php echo e($e->id); ?>/edit">
                                                        <center>
                                                            <button type="button" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </button>
                                                        </center>
                                                    </a></td>
                                                <td>Hapus</td>
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