<?php $__env->startSection('content'); ?>
<section id="content_wrapper">
    <div id="content" class="animated fadeIn">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Standard Fields</span>
                </div>
                <div class="panel-body">
                    <form  action="/admin/alumni/<?php echo $__env->yieldContent('editAlumniId'); ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <?php $__env->startSection('editMethod'); ?>
                    <?php echo $__env->yieldSection(); ?>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">NIM</label>
                            <div class="col-lg-8">
                                <input type="text" id="nim" class="form-control" value="<?php echo $__env->yieldContent('editNim'); ?>" name="nim">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Nama</label>
                            <div class="col-lg-8">
                                <input type="text" id="nama" class="form-control" value="<?php echo $__env->yieldContent('editNama'); ?>" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Alamat</label>
                            <div class="col-lg-8">
                                <input type="text" id="alamat" class="form-control" value="<?php echo $__env->yieldContent('editAlamat'); ?>" name="alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Tahun Masuk</label>
                            <div class="col-lg-8">
                                <input type="number" id="th_masuk" class="form-control" value="<?php echo $__env->yieldContent('editThMasuk'); ?>" name="th_masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Tahun Keluar</label>
                            <div class="col-lg-8">
                                <input type="number" id="th_keluar" class="form-control" value="<?php echo $__env->yieldContent('editThKeluar'); ?>" name="th_keluar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Prodi</label>
                            <div class="col-lg-8">
                                <input type="text" id="prodi" class="form-control" value="<?php echo $__env->yieldContent('editProdi'); ?>" name="prodi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">No. Telp</label>
                            <div class="col-lg-8">
                                <input type="text" id="no_telp" class="form-control" value="<?php echo $__env->yieldContent('editNoTelp'); ?>" name="no_telp">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Poto</label>
                            <div class="col-lg-8">
                                <input type="file" id="inputStandard" class="form-control" name="gambar">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-8">
                                <input type="submit" class="btn btn-info" value="Simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>