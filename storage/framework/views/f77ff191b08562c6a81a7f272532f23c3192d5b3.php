
<?php $__env->startSection('isicontent'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary">Master Data Pengguna Klinik</h1> </br>
        <?php if(session('Pesan')): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="fas fa-check-circle"></i> <?php echo e(session('Pesan')); ?> !!! </h5>
        </div>
        <?php endif; ?>
        <?php if(session('Invalid')): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="fas fa-exclamation-triangle"></i> <?php echo e(session('Invalid')); ?> !!! </h5>
        </div>
        <?php endif; ?>
        </br>
        <a href="/pegawai /add" class="btn-sm btn-success"> <i class="fas fa-folder-plus"></i> Tambah Pengguna</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> no_pegawai </th>
                        <th> nama </th>
                        <th> Jabatan </th>
                        <th> no_telp </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->no_pegawai); ?></td>
                        <td><?php echo e($data->nama); ?></td>
                        <td><?php echo e($data->Jabatan); ?></td>
                        <td><?php echo e($data->no_telp); ?></td>
                        <td>
                            <a href="/pegawai/detail/<?php echo e($data->id); ?>" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> Lihat </a>
                            <a href="/pegawai/edit/<?php echo e($data->id); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                            <a href="/pegawai/delete/<?php echo e($data->id); ?>" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i> Hapus </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/pegawai_klinik.blade.php ENDPATH**/ ?>