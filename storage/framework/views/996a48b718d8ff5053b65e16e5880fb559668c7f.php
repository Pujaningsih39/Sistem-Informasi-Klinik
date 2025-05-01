
<?php $__env->startSection('breadcrumb','Detail User'); ?>
<?php $__env->startSection('isicontent'); ?>

<form action="/perwalian/update/<?php echo e($perwalian->id); ?>" method="POST" enctype="multipart/form-data" class="col-sm-12">
    <?php echo csrf_field(); ?>
    <div class="card shadow mb-8">
        <div class="card-header py-6">
            <h1 class="m-0 font-weight-bold text-primary"> Detail Perwalian</h1> </br>
            <?php if(session('Pesan')): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h5><i class="fas fa-check-circle"></i> <?php echo e((session('Pesan'))); ?> !!! </h5>
            </div>
            <?php endif; ?>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th class="col-sm-4">NIM</th>
                    <th>: <?php echo e($perwalian->nim); ?></th>
                </tr>

                <tr>
                    <th class="col-sm-4">Nama</th>
                    <th>: <?php echo e($perwalian->nama_mahasiswa); ?></th>
                </tr>

                <tr>
                    <th class="col-sm-4">Tahun</th>
                    <th>: <?php echo e($perwalian->tahun); ?></th>
                </tr>

                <tr>
                    <th class="col-sm-4">Semester</th>
                    <th>: <?php echo e($perwalian->semester); ?></th>
                </tr>

                <tr>
                    <th class="col-sm-4">Dosen Wali</th>
                    <th>: <?php echo e($perwalian->nama_dosen); ?></th>
                </tr>

                <tr>
                    <th>Status KRS (<?php echo e($perwalian->status); ?>)</th>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Setuju" checked>
                            <label class="form-check-label">
                                Setuju
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="Tidak Setuju">
                            <label class="form-check-label">
                                Tidak Setuju
                            </label>
                        </div>
                    </td>
                </tr>

            </table>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> Semester </th>
                                <th> Kode Mata Kuliah </th>
                                <th> Mata Kuliah </th>
                                <th> SKS </th>
                            </tr>
                        </thead>
                        <?php
                        //fungsi memecah array mata kuliah
                        $matkul = $perwalian->id_mk;
                        $mk = explode(",", $matkul);
                        ?>
                        <tbody>
                            <?php $__currentLoopData = $krsMK; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
                            $a = $data->kode_mk;
                            $check = "";
                            for ($x = 0; $x < count($mk); $x++) {
                                if ($a == $mk[$x])
                                    echo "<tr>
                                                <td align=\"center\">$data->semester</td>
                                                <td align=\"center\">$data->kode_mk</td>
                                                <td align=\"center\">$data->nama_mk</td>
                                                <td align=\"center\">$data->sks</td>
                                            </tr>";
                            }
                            ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php
            $stat = $perwalian->status;
            if ($stat == "Sedang Proses")
                echo "<button class=\"btn btn-sm btn-success\"><i class=\"fas fa-save\"></i> Update</button>";
            ?>
            <a href="/perwalian/<?php echo e(Auth::user()->username); ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>


        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/perwalian_detail.blade.php ENDPATH**/ ?>