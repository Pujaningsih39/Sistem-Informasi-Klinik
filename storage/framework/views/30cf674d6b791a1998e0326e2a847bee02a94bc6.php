
<?php $__env->startSection('isicontent'); ?>
<div class="card shadow mb-8">

    <div class="card-header py-6">
        <table align="center" class="col-sm-12">
            <tr>
                <td>
                    <h1 class="m-0 font-weight-bold text-primary"> Master Data Mata Kuliah </h1>
                </td>
                <td>
                    <h1 class="m-0 font-weight-bold text-center"> -------------------------- </h1>
                </td>
            </tr>
        </table>
        <h6 class="m-0 font-weight-bold text-primary"> Halaman Detail </h6>
    </div>

    <div class="card-body">
        <table class="table">
            <tr>
                <th class="col-sm-4">Semester</th>
                <th width>: <?php echo e($matakuliah->semester); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">Kode Mata Kuliah</th>
                <th width>: <?php echo e($matakuliah->kode_mk); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">Nama Mata Kuliah</th>
                <th width>: <?php echo e($matakuliah->nama_mk); ?></th>
            </tr>

            <tr>
                <th class="col-sm-4">SKS</th>
                <th width>: <?php echo e($matakuliah->sks); ?></th>
            </tr>

        </table>
        <a href="/matakuliah/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/matakuliah_detail.blade.php ENDPATH**/ ?>