
<?php $__env->startSection('isicontent'); ?>

<form action="/krs/tambah" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Pilih KRS</h3> </br>

            <div class="input-group mb-4">
                <label class="input-group-text"> NIM dan Nama </label><br>
                <select class="form-select" name="nim" id="nim">
                    <option selected>Pilih...</option>
                    <?php $__currentLoopData = $krsMhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataMhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($dataMhs->id_mahasiswa); ?>"> <?php echo e($dataMhs->nim); ?> - <?php echo e($dataMhs->nama); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tahun <input name='tahun' class="form-control"></label>
            </div>

            <div class="form-group">
                <label>Semester <input name='semester' class="form-control"></label>
            </div>

            <!-- <div class="form-group">
            <label> Semester : </label>
            <select name="semester_mhs" id="semester_mhs">
                <option value="ganjil">Ganjil</option>
                <option value="genap">Genap</option>
            </select>
        </div> -->

        </div>
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
                <a href="/krs/" class="btn btn-sm btn-success"> Back </a>
                <div class="form-group">
                    </br><button class="btn btn-primary"><i class="fas fa-save"></i> Simpan </button>
                </div>
            </div>
        </div>

    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2_copy\resources\views/krs_add.blade.php ENDPATH**/ ?>