<?php $__env->startSection('content'); ?>
<section id="content_wrapper">
    <div id="content" class="animated fadeIn">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Standard Fields</span>
                </div>
                <div class="panel-body">
                    <form  action="/alumni/agenda/<?php echo $__env->yieldContent('editBeritaId'); ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <?php $__env->startSection('editMethod'); ?>
                    <?php echo $__env->yieldSection(); ?>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Judul Berita</label>
                            <div class="col-lg-8">
                                <input type="text" id="inputStandard" class="form-control" value="<?php echo $__env->yieldContent('editJudul'); ?>" name="judul">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label" for="textArea2">Isi Berita</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="isi" rows="10" name="isi"><?php echo $__env->yieldContent('editIsi'); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Gambar</label>
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

<?php echo $__env->make('layouts.alumni', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>