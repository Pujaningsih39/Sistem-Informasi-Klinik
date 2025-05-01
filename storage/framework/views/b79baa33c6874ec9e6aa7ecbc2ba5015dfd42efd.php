
<?php $__env->startSection('isicontent'); ?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary"> Halaman KRS</h1> </br>
        <?php
        //$kode = Auth::user()->username;
        //echo $kode;  
        ?>
        <a href="/krs/add" class="btn-sm btn-success"> <i class="fas fa-folder-plus"></i> Tambah KRS</a>
        <?php if(session('Pesan')): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">$times;</button>
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
                        <th> NIM </th>
                        <th> Nama </th>
                        <!-- <th> Kode Mata Kuliah </th> -->
                        <th> Tahun </th>
                        <th> Semester </th>
                        <th> Dosen Wali</th>
                        <th> Status KRS</th>
                        <th> Action </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $krs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->nim); ?></td>
                        <td><?php echo e($data->nama_mahasiswa); ?></td>
                        <!-- <td><?php echo e($data->id_mk); ?></td> -->
                        <td><?php echo e($data->tahun); ?></td>
                        <td><?php echo e($data->semester); ?></td>
                        <td><?php echo e($data->nama_dosen); ?></td>
                        <td>
                            <?php
                            $stat = $data->status;
                            if ($stat == "Sedang Proses")
                                echo "Proses";
                            elseif ($stat == "Setuju")
                                echo "Sudah Disetujui";
                            else
                                echo "Tidak Disetujui";
                            ?>
                        </td>
                        <td>
                            <a href="/krs/detail/<?php echo e($data->id); ?>" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> Lihat </a>
                            <?php
                            $stat = $data->status;
                            if ($stat == "Sedang Proses") {
                                echo "<a href=\"/krs/edit/$data->id\" class=\"btn btn-sm btn-warning\"><i class=\"fas fa-edit\"></i> Edit </a>
                                <a href=\"/krs/delete/$data->id\" class=\"btn btn-sm btn-danger\"><i class=\"fas fa-eraser\"></i> Hapus </a>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2_copy\resources\views/krs.blade.php ENDPATH**/ ?>