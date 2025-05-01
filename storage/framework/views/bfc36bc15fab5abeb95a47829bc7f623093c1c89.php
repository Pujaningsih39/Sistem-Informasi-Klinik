
<?php $__env->startSection('isicontent'); ?>

<form action="/krs/tambah" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">Tambahkan Kartu Rencana Studi (KRS)</h1>
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
            <h6 class="m-0 font-weight-bold text-primary">Pilih KRS</h6> </br>

            <div class="input-group mb-4">
                <label class="input-group-text"> NIM dan Nama </label><br>
                <label class="text-center"> -- </label>
                <select class="form-select" name="nim" id="nim">
                    <option selected>Pilih...</option>
                    <?php $__currentLoopData = $krsMhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataMhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($dataMhs->id_mahasiswa); ?>"> <?php echo e($dataMhs->nim); ?> - <?php echo e($dataMhs->nama); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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
                <label>Tahun <input name='tahun' class="form-control"></label>
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

            <div class="form-group">
                <label>Semester <input name='semester' class="form-control"></label>
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

                    <tbody>

                        <?php $__currentLoopData = $krs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td align="center"><?php echo e($data->semester); ?></td>
                            <td align="center"><?php echo e($data->kode_mk); ?></td>
                            <td align="center"><?php echo e($data->nama_mk); ?></td>
                            <td align="center"><?php echo e($data->sks); ?></td>
                            <td width="20px">
                                <input type="checkbox" name="pilihMK[]" value="<?php echo e($data->kode_mk); ?>">
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>

                <div class="form-group"><input type="hidden" name="id_username" value="<?php echo e(Auth::user()->username); ?>">
                    </br><button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Simpan </button>
                    <a href="/krs/<?php echo e(Auth::user()->username); ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
                </div>
            </div>
        </div>

    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/krs_add.blade.php ENDPATH**/ ?>