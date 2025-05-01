

<?php $__env->startSection('isicontent'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h1> </br>
        <a href="/mastermahasiswa/add" class="btn-sm btn-success"><i class="fas fa-folder-plus"></i> Tambah Data Mahasiswa</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-borderd" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> NIM </th>
                        <th> Nama </th>
                        <th> Jenis Kelamin </th>
                        <th> Tempat, Tanggal Lahir </th>
                        <th> Agama </th>
                        <th> Alamat </th>
                        <th> No Telepon </th>
                        <th> Action </th>

                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $mastermahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->nim); ?></td>
                        <td><?php echo e($data->nama); ?></td>
                        <td><?php echo e($data->jenis_kelamin); ?></td>
                        <td><?php echo e($data->tt_lahir); ?></td>
                        <td><?php echo e($data->agama); ?></td>
                        <td><?php echo e($data->alamat); ?></td>
                        <td><?php echo e($data->no_telp); ?></td>
                        <td>
                            <a href="/mastermahasiswa/detail/<?php echo e($data->id_mahasiswa); ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> Lihat </a>
                            <a href="/mastermahasiswa/edit/<?php echo e($data->id_mahasiswa); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                            <a href="/mastermahasiswa/delete/<?php echo e($data->id_mahasiswa); ?>" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i> Hapus </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miniproject_2\resources\views/master_mahasiswa.blade.php ENDPATH**/ ?>