
<?php $__env->startSection('isicontent'); ?>

<table class="table">
    <tr>
        <th width="100px">NIM</th>
        <th width="30px">:</th>
        <th width><?php echo e($mastermahasiswa->nim); ?></th>
    </tr>

    <tr>
        <th width="100px">Nama</th>
        <th width="30px">:</th>
        <th width><?php echo e($mastermahasiswa->nama); ?></th>
    </tr>

    <tr>
        <th width="100px">Jenis Kelamin</th>
        <th width="30px">:</th>
        <th width><?php echo e($mastermahasiswa->jenis_kelamin); ?></th>
    </tr>

    <tr>
        <th width="100px">Tempat, Tanggal Lahir</th>
        <th width="30px">:</th>
        <th width><?php echo e($mastermahasiswa->tt_lahir); ?></th>
    </tr>

    <tr>
        <th width="100px">Agama</th>
        <th width="30px">:</th>
        <th width><?php echo e($mastermahasiswa->agama); ?></th>
    </tr>

    <tr>
        <th width="100px">Alamat</th>
        <th width="30px">:</th>
        <th width><?php echo e($mastermahasiswa->alamat); ?></th>
    </tr>

    <tr>
        <th width="100px">No Telepon</th>
        <th width="30px">:</th>
        <th width><?php echo e($mastermahasiswa->no_telp); ?></th>
    </tr>


</table>

<a href="/mastermahasiswa/" class="btn btn-sm btn-success"> Back </a>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miniproject_2\resources\views/detail_mastermahasiswa.blade.php ENDPATH**/ ?>