
<?php $__env->startSection('breadcrumb','Detail User'); ?>
<?php $__env->startSection('isicontent'); ?>

<table class="table">
    <tr>
        <th width="100px">Id</th>
        <th width="30px">:</th>
        <th width><?php echo e($user->id); ?></th>
    </tr>

    <tr>
        <th width="100px">Username</th>
        <th width="30px">:</th>
        <th width><?php echo e($user->username); ?></th>
    </tr>

    <tr>
        <th width="100px">Password</th>
        <th width="30px">:</th>
        <th width><?php echo e($user->password); ?></th>
    </tr><br>
    <br>

</table>

<a href="/user/" class="btn btn-sm btn-success"> Back </a>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/user_detail.blade.php ENDPATH**/ ?>