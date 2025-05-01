
<?php $__env->startSection('isicontent'); ?>
<div class="card shadow mb-8 col-sm-12">

    <div class="card-header py-6">
        <table align="center" class="col-sm-12">
            <tr>
                <td>
                    <h1 class="m-0 font-weight-bold text-primary"> Master Data Mahasiswa </h1>
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
                <th class="col-sm-4">Dosen Wali</th>
                <th> : <?php echo e($mastermahasiswa->nama_dosen); ?></th>
            </tr>

            <tr>
                <th width="100px">NIM</th>
                <th width>: <?php echo e($mastermahasiswa->nim); ?></th>
            </tr>

            <tr>
                <th width="100px">Nama</th>
                <th width>: <?php echo e($mastermahasiswa->nama); ?></th>
            </tr>


            <tr>
                <th width="100px">Jurusan</th>
                <th width>: <?php echo e($mastermahasiswa->jurusan); ?></th>
            </tr>

            <tr>
                <th width="100px">Jenis Kelamin</th>
                <th width>: <?php echo e($mastermahasiswa->jenis_kelamin); ?></th>
            </tr>

            <tr>
                <th width="100px">Tempat, Tanggal Lahir</th>
                <th width>: <?php echo e($mastermahasiswa->tt_lahir); ?></th>
            </tr>

            <tr>
                <th width="100px">Agama</th>
                <th width>: <?php echo e($mastermahasiswa->agama); ?></th>
            </tr>

            <tr>
                <th width="100px">Alamat</th>
                <th width>: <?php echo e($mastermahasiswa->alamat); ?></th>
            </tr>

            <tr>
                <th width="100px">No Telepon</th>
                <th width>: <?php echo e($mastermahasiswa->no_telp); ?></th>
            </tr>
        </table>

        <a href="/mastermahasiswa/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/mahasiswa_detail.blade.php ENDPATH**/ ?>