

<?php $__env->startSection('isicontent'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary">Data Dosen</h1> </br>
        <a href="/masterdosen/add" class="btn-sm btn-success"><i class="fas fa-folder-plus"></i> Tambah Data Dosen</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-borderd" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> NIP </th>
                        <th> Nama </th>
                        <th> Jenis Kelamin </th>
                        <th> Agama </th>
                        <th> Alamat </th>
                        <th> No Telepon </th>
                        <th> Email </th>
                        <th> Action </th>

                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $masterdosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->nip); ?></td>
                        <td><?php echo e($data->nama); ?></td>
                        <td><?php echo e($data->jenis_kelamin); ?></td>
                        <td><?php echo e($data->agama); ?></td>
                        <td><?php echo e($data->alamat); ?></td>
                        <td><?php echo e($data->no_telp); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <td>
                            <a href="/masterdosen/detail/<?php echo e($data->id_dosen); ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> Lihat </a>
                            <a href="/masterdosen/edit/<?php echo e($data->id_dosen); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                            <a href="/masterdosen/delete/<?php echo e($data->id_dosen); ?>" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i> Hapus </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miniproject_2\resources\views/master_dosen.blade.php ENDPATH**/ ?>