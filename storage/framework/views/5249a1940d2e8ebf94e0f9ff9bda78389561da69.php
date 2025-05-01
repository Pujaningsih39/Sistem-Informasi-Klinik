
<?php $__env->startSection('breadcrumb','Edit Mahasiswa'); ?>
<?php $__env->startSection('isicontent'); ?>


<form action="/mastermahasiswa/update/<?php echo e($mastermahasiswa->id_mahasiswa); ?>" method="POST" enctype="multipart/form-data">
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
                    <div class="col-sm-6">

                        <div class="from-group">
                            <label>Dosen Wali</label><input type="hidden" name="id_dosen" value="<?php echo e($mastermahasiswa->id_dosen); ?>" />
                            <input name="nama_dosen" class="form-control" value="<?php echo e($mastermahasiswa->nama_dosen); ?>" readonly>
                            <div class="text-danger">
                                <?php $__errorArgs = ['nama_dosen'];
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
                        <div class="form-group">
                            <label> NIM </label>
                            <input name="nim" class="form-control" value="<?php echo e($mastermahasiswa->nim); ?>" readonly>
                            <div class="text-danger">
                                <?php $__errorArgs = ['nim'];
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
                            <label> Nama </label>
                            <input name="nama" class="form-control" value="<?php echo e($mastermahasiswa->nama); ?>">
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

                        <div class="form-group ">
                            <label> Jurusan : <?php echo e($mastermahasiswa->jurusan); ?> </label></br>
                            <label>Edit Jurusan</label></br>
                            <input type="hidden" name="jurusan_awal" id="jurusan_awal" value="<?php echo e($mastermahasiswa->jurusan); ?>" />
                            <select name="jurusan" id="jurusan">
                                <option>Pilih..</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </div>
                        </br>
                        <div class="form-group">
                            <label> Tahun Masuk </label>
                            <input name="tahun_masuk" class="form-control" value="<?php echo e($mastermahasiswa->tahun_masuk); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['tahun_masuk'];
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
                            <label> Jenis Kelamin : <?php echo e($mastermahasiswa->jenis_kelamin); ?></label></br>
                            <label> Edit Jenis Kelamin </label></br>
                            <input type="hidden" name="jenis_kelamin_awal" value="<?php echo e($mastermahasiswa->jenis_kelamin); ?>" />
                            <select name="jenis_kelamin" id="jenis_kelamin">
                                <option>Pilih..</option>
                                <option value="Perempuan"> Perempuan </option>
                                <option value="Laki-laki"> Laki-laki </option>
                            </select>
                        </div>
                        </br>
                        <div class="form-group">
                            <label> Tempat, tanggal Lahir </label>
                            <input name="tt_lahir" class="form-control" value="<?php echo e($mastermahasiswa->tt_lahir); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['tt_lahir'];
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
                            <label> Agama : <?php echo e($mastermahasiswa->agama); ?></label></br>
                            <label> Edit Agama </label></br>
                            <input type="hidden" name="agama_awal" value="<?php echo e($mastermahasiswa->agama); ?>" />
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
                            <label> Alamat </label>
                            <input name="alamat" class="form-control" value="<?php echo e($mastermahasiswa->alamat); ?>">
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
                        <div class="form-group">
                            <label> No Telepon </label>
                            <input name="no_telp" class="form-control" value="<?php echo e($mastermahasiswa->no_telp); ?>">
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

                    </div>
                </div>
            </div>
            <br>
            <div class="form-group"><input type="hidden" name="hk_un">
                <button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Update </button>
                <a href="/mastermahasiswa/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
            </div>
        </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/mahasiswa_edit.blade.php ENDPATH**/ ?>