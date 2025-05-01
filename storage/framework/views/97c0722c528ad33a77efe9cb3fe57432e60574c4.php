
<?php $__env->startSection('isicontent'); ?>


<form action="/users/tambah" method="POST" enctype="multipart/form-data">
    <div class="card shadow mb-4">

        <div class="card-header py-6">
            <table align="center" class="col-sm-12">
                <tr>
                    <td>
                        <h1 class="m-0 font-weight-bold text-primary"> Daftar Akun Users </h1>
                    </td>
                    <td>
                        <h1 class="m-0 font-weight-bold text-center"> --------------------------- </h1>
                    </td>
                </tr>
            </table>
            <h6 class="m-0 font-weight-bold text-primary"> Halaman Tambah Akun Users </h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <?php echo csrf_field(); ?>
                <div class="content">

                    <div class="form-group">
                        <label>Nama</label>
                        <input name='name' class="form-control">
                        <div class="text-danger">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input name='username' class="form-control">
                        <div class="text-danger">
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Level</label></br>
                        <select name="level" id="level">
                            <option>Pilih..</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Dosen">Dosen</option>
                        </select>
                        <div class="text-danger">
                            <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        </br><button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Simpan </button>
                        <a href="/users/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/users_add.blade.php ENDPATH**/ ?>