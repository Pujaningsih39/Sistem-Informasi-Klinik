
<?php $__env->startSection('isicontent'); ?>

<table class="table">
    <tr>
        <th width="100px">NIP</th>
        <th width="30px">:</th>
        <th width><?php echo e($masterdosen->nip); ?></th>
    </tr>

    <tr>
        <th width="100px">Nama</th>
        <th width="30px">:</th>
        <th width><?php echo e($masterdosen->nama); ?></th>
    </tr>

    <tr>
        <th width="100px">Jenis Kelamin</th>
        <th width="30px">:</th>
        <th width><?php echo e($masterdosen->jenis_kelamin); ?></th>
    </tr>

    <tr>
        <th width="100px">Agama</th>
        <th width="30px">:</th>
        <th width><?php echo e($masterdosen->agama); ?></th>
    </tr>

    <tr>
        <th width="100px">Alamat</th>
        <th width="30px">:</th>
        <th width><?php echo e($masterdosen->alamat); ?></th>
    </tr>

    <tr>
        <th width="100px">No Telepon</th>
        <th width="30px">:</th>
        <th width><?php echo e($masterdosen->no_telp); ?></th>
    </tr>

    <tr>
        <th width="100px">Email</th>
        <th width="30px">:</th>
        <th width><?php echo e($masterdosen->email); ?></th>
    </tr>


</table>

<a href="/masterdosen/" class="btn btn-sm btn-success"> Back </a>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miniproject_2\resources\views/detail_masterdosen.blade.php ENDPATH**/ ?>