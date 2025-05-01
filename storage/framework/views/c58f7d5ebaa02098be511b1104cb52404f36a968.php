
<?php $__env->startSection('breadcrumb','Edit KRS'); ?>
<?php $__env->startSection('isicontent'); ?>

<form action="/matakuliah/update/<?php echo e($matakuliah->id); ?>" method="POST" enctype="multipart/form-data" class="col-sm-12">
    <?php echo csrf_field(); ?>
    <div class="card shadow mb-8 ">
        <div class="card-header py-6">
            <table align="center" class="col-sm-12">
                <tr>
                    <td>
                        <h1 class="m-0 font-weight-bold text-primary"> Master Data Mahasiswa </h1>
                    </td>
                    <td>
                        <h1 class="m-0 font-weight-bold text-center"> --------------------------- </h1>
                    </td>
                </tr>
            </table>
            <h6 class="m-0 font-weight-bold text-primary"> Halaman Edit </h6>
        </div>

        <div class="card-body">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label> Semester </label>
                            <input name="semester" class="form-control" value="<?php echo e($matakuliah->semester); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['semester'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label> Kode Mata Kuliah </label>
                            <input name="kode_mk" class="form-control" value="<?php echo e($matakuliah->kode_mk); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['kode_mk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label> Nama Mata Kuliah </label>
                            <input name="nama_mk" class="form-control" value="<?php echo e($matakuliah->nama_mk); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['nama_mk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label> SKS </label>
                            <input name="sks" class="form-control" value="<?php echo e($matakuliah->sks); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['sks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-group"><input type="hidden" name="hk_un">
                            <button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Update </button>
                            <a href="/matakuliah/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/matakuliah_edit.blade.php ENDPATH**/ ?>