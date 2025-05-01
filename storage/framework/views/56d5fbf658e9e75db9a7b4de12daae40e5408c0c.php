
<?php $__env->startSection('breadcrumb','Edit User'); ?>
<?php $__env->startSection('isicontent'); ?>

<form action="/masterdosen/update/<?php echo e($masterdosen->id_dosen); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card shadow mb-8 ">
        <div class="card-header py-6">
            <table align="center" class="col-sm-12">
                <tr>
                    <td>
                        <h1 class="m-0 font-weight-bold text-primary"> Master Data Dosen </h1>
                    </td>
                    <td>
                        <h1 class="m-0 font-weight-bold text-center"> --------------------------------- </h1>
                    </td>
                </tr>
            </table>
            <h6 class="m-0 font-weight-bold text-primary"> Halaman Edit </h6>
        </div>
        <div class="card-body">
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="from-group">
                            <label>NIP</label>
                            <input name="nip" class="form-control" value="<?php echo e($masterdosen->nip); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['nip'];
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
                        </br>
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" class="form-control" value="<?php echo e($masterdosen->nama); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['nama'];
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
                        </br>
                        <div class="form-group">
                            <label> Jenis Kelamin : <?php echo e($masterdosen->jenis_kelamin); ?></label></br>
                            <label> Edit Jenis Kelamin </label></br>
                            <input type="hidden" name="jenis_kelamin_awal" value="<?php echo e($masterdosen->jenis_kelamin); ?>" />
                            <select name="jenis_kelamin" id="jenis_kelamin">
                                <option>Pilih..</option>
                                <option value="Perempuan"> Perempuan </option>
                                <option value="Laki-laki"> Laki-laki </option>
                            </select>
                        </div>
                        </br>
                        <div class="form-group">
                            <label> Agama : <?php echo e($masterdosen->agama); ?></label></br>
                            <label> Edit Agama </label></br>
                            <input type="hidden" name="agama_awal" value="<?php echo e($masterdosen->agama); ?>" />
                            <select name="agama" id="agama">
                                <option>Pilih..</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control" value="<?php echo e($masterdosen->alamat); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['alamat'];
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
                        </br>
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input name="no_telp" class="form-control" value="<?php echo e($masterdosen->no_telp); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['no_telp'];
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
                        </br>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" value="<?php echo e($masterdosen->email); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['email'];
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
                            </br><button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Simpan </button>
                            <a href="/masterdosen/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/dosen_edit.blade.php ENDPATH**/ ?>