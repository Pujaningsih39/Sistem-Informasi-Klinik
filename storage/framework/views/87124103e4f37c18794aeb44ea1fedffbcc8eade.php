
<?php $__env->startSection('isicontent'); ?>

<form action="/users/tambah" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card shadow mb-4">

        <div class="card-header py-6">
            <h1 class="m-0 font-weight-bold text-primary text-center">Halaman Tambah Akun Pengguna</h1>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div class="content">

                    <div class="form-group">
                        <label>Nama</label>
                        <input name='name' class="form-control" value="<?php echo e(old('name')); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input name='email' type="email" class="form-control" value="<?php echo e(old('email')); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input name='password' type="password" class="form-control">
                        <div class="text-danger">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-control">
                            <option value="">Pilih...</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                            <option value="dokter">Dokter</option>
                            <option value="kasir">Kasir</option>
                        </select>
                        <div class="text-danger">
                            <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <br>
                        <button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Simpan</button>
                        <a href="/users" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/users_klinik_add.blade.php ENDPATH**/ ?>