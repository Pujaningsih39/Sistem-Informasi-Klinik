
<?php $__env->startSection('isicontent'); ?>
<div class="card shadow mb-8">
    <div class="card-header py-6">
        <table align="center" class="col-sm-12">
            <tr>
                <td>
                    <h1 class="m-0 font-weight-bold text-primary"> Master Data Dosen </h1>
                </td>
                <td>
                    <h1 class="m-0 font-weight-bold text-center"> --------------------------------- </h1>
                </td>
            </tr>
        </table>
        <h6 class="m-0 font-weight-bold text-primary"> Halaman Detail </h6>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th class="col-sm-4">NIP</th>
                <th>: <?php echo e($masterdosen->nip); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">Nama</th>
                <th>: <?php echo e($masterdosen->nama); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">Jenis Kelamin</th>
                <th>: <?php echo e($masterdosen->jenis_kelamin); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">Agama</th>
                <th>: <?php echo e($masterdosen->agama); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">Alamat</th>
                <th>: <?php echo e($masterdosen->alamat); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">No Telepon</th>
                <th>: <?php echo e($masterdosen->no_telp); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">Email</th>
                <th>: <?php echo e($masterdosen->email); ?></th>
            </tr>


        </table>

        <a href="/masterdosen/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/dosen_detail.blade.php ENDPATH**/ ?>