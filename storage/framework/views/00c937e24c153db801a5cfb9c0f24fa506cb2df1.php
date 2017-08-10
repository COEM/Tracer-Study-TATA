<?php $__env->startSection('body','admin-elements-page'); ?>
<?php $__env->startSection('content'); ?>
<section id="content_wrapper">
    <div id="content" class="animated fadeIn">
        <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Standard Fields</span>
                </div>
                <div class="panel-body">
                    <form  action="/admin/soal/<?php echo $__env->yieldContent('editSoalId'); ?>" class="form-horizontal" role="form" method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php $__env->startSection('editMethod'); ?>
                    <?php echo $__env->yieldSection(); ?>
                        <div class="form-group">
                            <label class="col-lg-3 control-label" for="textArea2">Soal :</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="soal" rows="10" name="soal"><?php echo $__env->yieldContent('editSoal'); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-3 control-label">Tipe Soal</label>
                            <div class="col-lg-8">
                             
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Essay</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Opsi</a></li>
                                  </ul>

                                  <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                      <div class="container">

                                      </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="col-lg-8">
                                            <div class="input_fields_wrap">
                                                <button class="add_field_button btn btn-success">Tambah Opsi</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                  </div>
                            </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label" for="textArea2">Isi Berita</label>
                            <div class="col-lg-8">
                                <select class="form-control m-b" name="kategori_id">
                                <option value="<?php echo $__env->yieldContent('editIdKategori'); ?>"><?php echo $__env->yieldContent('editKategori','Pilih Kategori soal'); ?></option>
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($e->id); ?>"><?php echo e($e->kategori); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>
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
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>