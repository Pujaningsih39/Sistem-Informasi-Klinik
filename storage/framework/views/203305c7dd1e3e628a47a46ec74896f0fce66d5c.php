
<?php $__env->startSection('breadcrumb','Detail User'); ?>
<?php $__env->startSection('isicontent'); ?>

<form action="/user/update/<?php echo e($user->id); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="from-group">
                    <label>Username</label>
                    <input name="username" class="form-control" value="<?php echo e($user->username); ?>" readonly>
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
                    <label>Password</label>
                    <input name="password" class="form-control" value="<?php echo e($user->password); ?>">
                    <div class="text-danger">
                        <?php $__errorArgs = ['password'];
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
                    <label>Level : <?php echo e($user->level); ?> </label>
                    <label>Ganti Level</label>
                    <select name="level" id="level">
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Dosen">Dosen</option>
                    </select>
                </div>

                <br>
                <div class="form-group">
                    <button class="btn btn-primary">UPDATE</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miniproject_2\resources\views/v_edituser.blade.php ENDPATH**/ ?>