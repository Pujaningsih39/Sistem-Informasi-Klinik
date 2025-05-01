
<?php $__env->startSection('breadcrumb','Edit KRS'); ?>
<?php $__env->startSection('isicontent'); ?>

<form action="/krs/update/<?php echo e($krs->id); ?>" method="POST" enctype="multipart/form-data" class="col-sm-12">
    <?php echo csrf_field(); ?>
    <div class="card shadow mb-8">

        <div class="card-header py-6">
            <h1 class="m-0 font-weight-bold text-primary">Kartu Rencana Studi (KRS)</h1>
            <h6 class="m-0 font-weight-bold text-primary">Halaman Edit</h6>
            <?php if(session('Pesan')): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h5><i class="fas fa-check-circle"></i> <?php echo e((session('Pesan'))); ?> !!! </h5>
            </div>
            <?php endif; ?>
            <?php if(session('Invalid')): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h5><i class="fas fa-exclamation-triangle"></i> <?php echo e((session('Invalid'))); ?> !!! </h5>
            </div>
            <?php endif; ?>
            <br>
        </div>

        <div class="card-body">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="from-group">
                            <label>NIM </label><input type='hidden' name='id_mahasiswa' value='<?php echo e($krs->id_mahasiswa); ?>' />
                            <input name="nim" class="form-control" value="<?php echo e($krs->nim); ?>" readonly>
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

                        <div class="from-group">
                            <label>Nama</label>
                            <input name="nama_mahasiswa" class="form-control" value="<?php echo e($krs->nama_mahasiswa); ?>" readonly>
                            <div class="text-danger">
                                <?php $__errorArgs = ['nama_mahasiswa'];
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



                        <div class="from-group">
                            <label>Tahun</label>
                            <input name="tahun" class="form-control" value="<?php echo e($krs->tahun); ?>">
                            <div class="text-danger">
                                <?php $__errorArgs = ['tahun'];
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

                        <div class="from-group">
                            <label>Semester</label>
                            <input name="semester" class="form-control" value="<?php echo e($krs->semester); ?>">
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

                        <div class="from-group">
                            <label>Dosen Wali</label>
                            <input name="nama_dosen" class="form-control" value="<?php echo e($krs->nama_dosen); ?>" readonly>
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
                    </div>
                </div>
            </div>


            <div class="card-body">
                <div class="text-danger">
                    <?php $__errorArgs = ['pilihMK'];
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
                <div class="table-responsive">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th> Semester </th>
                                        <th> Kode Mata Kuliah </th>
                                        <th> Mata Kuliah </th>
                                        <th> SKS </th>
                                        <th> Pilih </th>
                                    </tr>
                                </thead>
                                <?php
                                //fungsi memecah array mata kuliah
                                $matkul = $krs->id_mk;
                                $mk = explode(",", $matkul);
                                ?>
                                <tbody>
                                    <?php $__currentLoopData = $krsMK; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td align="center"><?php echo e($data->semester); ?></td>
                                        <td align="center"><?php echo e($data->kode_mk); ?></td>
                                        <td align="center"><?php echo e($data->nama_mk); ?></td>
                                        <td align="center"><?php echo e($data->sks); ?></td>
                                        <td width="20px">
                                            <?php
                                            $a = $data->kode_mk;
                                            $check = "";
                                            for ($x = 0; $x < count($mk); $x++) {
                                                if ($a == $mk[$x])
                                                    $check = "checked='true'";
                                            }

                                            ?>
                                            <input type="checkbox" name="pilihMK[]" value="<?php echo e($data->kode_mk); ?>" <?php echo $check; ?>>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group"><input type="hidden" name="hk_un" value="<?php echo e(Auth::user()->username); ?>">
                <button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Update </button>
                <a href="/krs/<?php echo e(Auth::user()->username); ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
            </div>

        </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/krs_edit.blade.php ENDPATH**/ ?>