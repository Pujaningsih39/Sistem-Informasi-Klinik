
<?php $__env->startSection('isicontent'); ?>

<form action="/users/update/<?php echo e($users_klinik->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="card shadow mb-8">
        <div class="card-header py-6">
            <table align="center" class="col-sm-12">
                <tr>
                    <td>
                        <h1 class="m-0 font-weight-bold text-primary"> Edit Akun User </h1>
                    </td>
                    <td>
                        <h1 class="m-0 font-weight-bold text-center"> ---------------------------------- </h1>
                    </td>
                </tr>
            </table>
        </div>

        <div class="card-body">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Nama</label>
                            <input name="name" class="form-control" value="<?php echo e($users_klinik->name); ?>">
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
                        <br>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" value="<?php echo e($users_klinik->email); ?>">
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
                        <br>

                        <div class="form-group">
                            <label>Role Saat Ini: <strong><?php echo e(ucfirst($users_klinik->role)); ?></strong></label><br>
                            <label>Edit Role</label>
                            <select name="role" class="form-control">
                                <option value="">Pilih Role...</option>
                                <option value="admin" <?php echo e($users_klinik->role == 'admin' ? 'selected' : ''); ?>>Admin</option>
                                <option value="petugas" <?php echo e($users_klinik->role == 'petugas' ? 'selected' : ''); ?>>Petugas</option>
                                <option value="dokter" <?php echo e($users_klinik->role == 'dokter' ? 'selected' : ''); ?>>Dokter</option>
                                <option value="kasir" <?php echo e($users_klinik->role == 'kasir' ? 'selected' : ''); ?>>Kasir</option>
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

                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Update </button>
                <a href="/users/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/users_klinik_edit.blade.php ENDPATH**/ ?>