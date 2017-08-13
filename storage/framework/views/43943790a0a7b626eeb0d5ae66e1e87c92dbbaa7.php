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
                    <form  action="/alumni/soal/Identitas Diri/<?php echo $__env->yieldContent('editAlumniId'); ?>" class="form-horizontal" role="form" method="post">
                        <?php echo e(csrf_field()); ?>

                        <?php $__env->startSection('editMethod'); ?>
                        <?php echo $__env->yieldSection(); ?>
                        <?php $__currentLoopData = $opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group">
                                <label for="inputStandard" class="col-lg-0"><?php echo e($e->soal); ?></label>
                                    <?php if($e->type == "essay"): ?>
                                        <input type="text" id="inputStandard" class="form-control" value="<?php echo $__env->yieldContent('editJudul'); ?>" name="<?php echo e(str_slug($e->soal)); ?>">
                                    <?php elseif($e->type == "opsi"): ?>
                                            <?php if($e->soal == "Menurut penilaian Bapak/Ibu/Saudara bagaimana kemampuan untuk setiap jenis keterampilan yang dimiliki oleh alumni Politeknik Negeri Pontianak yang bekerja di perusahaan/instansi Anda?"): ?>
                                                <table class="table">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Jenis Kemampuan</th>
                                                        <th>Sangat Baik</th>
                                                        <th>Baik</th>
                                                        <th>Cukup</th>
                                                        <th>Kurang</th>
                                                    </tr>
                                                    <?php $__currentLoopData = $e->opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($loop->index + 1); ?></td>
                                                            <td><?php echo e($o->ket); ?></td>
                                                            <td>
                                                                <div class="radio-custom mb5">
                                                                    <input type="radio" name="<?php echo e(str_slug($e->soal)); ?>[<?php echo e($o->ket); ?>]" id="<?php echo e(str_slug($o->ket)."-sangat-baik"); ?>" value="sangat baik">
                                                                    <label for="<?php echo e(str_slug($o->ket."-sangat-baik")); ?>">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio-custom mb5">
                                                                    <input type="radio" name="<?php echo e(str_slug($e->soal)); ?>[<?php echo e($o->ket); ?>]" id="<?php echo e(str_slug($o->ket)."-baik"); ?>" value="baik">
                                                                    <label for="<?php echo e(str_slug($o->ket."-baik")); ?>">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio-custom mb5">
                                                                    <input type="radio" name="<?php echo e(str_slug($e->soal)); ?>[<?php echo e($o->ket); ?>]" id="<?php echo e(str_slug($o->ket)."-cukup"); ?>" value="cukup">
                                                                    <label for="<?php echo e(str_slug($o->ket."-cukup")); ?>">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio-custom mb5">
                                                                    <input type="radio" name="<?php echo e(str_slug($e->soal)); ?>[<?php echo e($o->ket); ?>]" id="<?php echo e(str_slug($o->ket)."-kurang"); ?>" value="kurang">
                                                                    <label for="<?php echo e(str_slug($o->ket."-kurang")); ?>">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </table>
                                                
                                            <?php elseif($e->soal == "Mohon diberikan komentar baik berupa harapan, saran atau kritik terhapad Politekik Negeri Pontianak khusus nya Prodi Teknik Informatika:" || $e->soal == "Berikan saran bagi peningkatan kualitas lulusan Program Studi kami supaya lebih dekat dengan kebutuhan/ tuntutan dunia kerja (mohon melihat dokumen akademik yang kami sertakan). Bapak/ Ibu dapat memanfaatkan halaman sebalik jika space berikut ini kurang"): ?>
                                                <?php $__currentLoopData = $e->opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <i><label for="inputStandard" class="col-lg-0"><?php echo e($o->ket); ?></label></i>
                                                    <input type="text" id="inputStandard" class="form-control" value="" name="<?php echo e(str_slug($e->soal)); ?>[<?php echo e($o->ket); ?>]">
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php elseif($e->soal == "Perlukah diadakan mata kuliah - mata kuliah pilihan baru/ keterampilan/ kompetensi tambahan untuk egantisipasi kemajuan di bidang yang Bapak/Ibu kelola?" || $e->soal == "Adakah alumni dari Jurusan kami yang bekerja pada lembaga bapak?" || $e->soal == "Jika saat ini tidak adaalumni kami yang bekerja pada lembaga ini, sebutkan alasannya"): ?>
                                                <?php $__currentLoopData = $e->opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($o->ket == "Perlu" || $o->ket == "Ada" || $o->ket == "Alasan lainnya"): ?>
                                                        <div class="radio-custom mb5">
                                                            <input type="radio" name="<?php echo e(str_slug($e->soal)); ?>" id="<?php echo e(str_slug($o->ket)); ?>" value="<?php echo e($o->ket); ?>">
                                                            <label for="<?php echo e(str_slug($o->ket)); ?>">
                                                                <?php echo e(title_case($o->ket)); ?>

                                                            </label>
                                                        </div>
                                                        <label for="">
                                                            Sebutkan :
                                                        </label>
                                                        <input type="text" id="inputStandard" class="form-control" value="" name="<?php echo e(str_slug($e->soal)); ?>[<?php echo e($o->ket); ?>]">
                                                        <br>
                                                    <?php else: ?>
                                                        <div class="radio-custom mb5">
                                                            <input type="radio" name="<?php echo e(str_slug($e->soal)); ?>" id="<?php echo e(str_slug($o->ket)); ?>" value="<?php echo e($o->ket); ?>">
                                                            <label for="<?php echo e(str_slug($o->ket)); ?>">
                                                                <?php echo e(title_case($o->ket)); ?>

                                                            </label>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $e->opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="radio-custom mb5">
                                                        <input type="radio" name="<?php echo e(str_slug($e->soal)); ?>" id="<?php echo e(str_slug($o->ket)); ?>" value="<?php echo e($o->ket); ?>">
                                                        <label for="<?php echo e(str_slug($o->ket)); ?>">
                                                            <?php echo e(title_case($o->ket)); ?>

                                                        </label>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.alumni', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>