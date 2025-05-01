
<?php $__env->startSection('isicontent'); ?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <table align="center" class="col-sm-12">
            <tr>
                <td>
                    <h1 class="m-0 font-weight-bold text-primary"> Perwalian Mahasiswa </h1>
                </td>
            </tr>
        </table>
        <?php if(session('Pesan')): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="fas fa-check-circle"></i> <?php echo e((session('Pesan'))); ?> !!! </h5>
        </div>
        <?php endif; ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> NIM </th>
                        <th> Nama </th>
                        <!-- <th> Kode Mata Kuliah </th> -->
                        <th> Tahun </th>
                        <th> Semester </th>
                        <th> Dosen Wali</th>
                        <th> Status KRS</th>
                        <th> Action </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $perwalian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->nim); ?></td>
                        <td><?php echo e($data->nama_mahasiswa); ?></td>
                        <td><?php echo e($data->tahun); ?></td>
                        <td><?php echo e($data->semester); ?></td>
                        <td><?php echo e($data->nama_dosen); ?></td>
                        <td>
                            <?php
                            $stat = $data->status;
                            if ($stat == "Sedang Proses")
                                echo "Proses";
                            elseif ($stat == "Setuju")
                                echo "Sudah Disetujui";
                            else
                                echo "Tidak Disetujui";
                            ?>
                        </td>
                        <td>
                            <a href="/perwalian/detail/<?php echo e($data->id); ?>" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> Lihat </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/perwalian.blade.php ENDPATH**/ ?>