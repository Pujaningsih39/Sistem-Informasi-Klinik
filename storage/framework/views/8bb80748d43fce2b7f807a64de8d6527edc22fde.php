
<?php $__env->startSection('isicontent'); ?>
<div class="card shadow mb-8">
    <div class="card-header py-6">
        <table align="center" class="col-sm-12">
            <tr>
                <td>
                    <h1 class="m-0 font-weight-bold text-primary"> Daftar Akun Users </h1>
                </td>
                <td>
                    <h1 class="m-0 font-weight-bold text-center"> ---------------------------------- </h1>
                </td>
            </tr>
        </table>
        <h6 class="m-0 font-weight-bold text-primary"> Halaman Detail </h6>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th width="100px">Nama</th>
                <th width="30px">:</th>
                <th width><?php echo e($users->name); ?></th>
            </tr>

            <tr>
                <th width="100px">Username</th>
                <th width="30px">:</th>
                <th width><?php echo e($users->username); ?></th>
            </tr>

            <tr>
                <th width="100px">Password</th>
                <th width="30px">:</th>
                <th width><?php echo e($users->password); ?></th>
            </tr>

            <tr>
                <th width="100px">Level</th>
                <th width="30px">:</th>
                <th width><?php echo e($users->level); ?></th>
            </tr>

        </table>
        <a href="/users/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/users_detail.blade.php ENDPATH**/ ?>