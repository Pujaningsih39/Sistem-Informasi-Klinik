
<?php $__env->startSection('isicontent'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary"> Daftar Akun User</h1> </br>
        <a href="/user/add" class="btn-sm btn-success"> <i class="fas fa-folder-plus"></i> Tambah Akun User</a>
        <?php if(session('Pesan')): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <h5><i class="icon fas fa-check"></i> Success!</h5>
            <?php echo e((session('Pesan'))); ?>.
        </div>
        <?php endif; ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-borderd" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> Level </th>
                        <th> Action </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->username); ?></td>
                        <td><?php echo e($data->password); ?></td>
                        <td><?php echo e($data->level); ?></td>
                        <td>
                            <a href="/user/detail/<?php echo e($data->id); ?>" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> Lihat </a>
                            <a href="/user/edit/<?php echo e($data->id); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                            <a href="/user/delete/<?php echo e($data->id); ?>" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i> Hapus </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/user.blade.php ENDPATH**/ ?>