
<?php $__env->startSection('breadcrumb','Tambah User'); ?>
<?php $__env->startSection('isicontent'); ?>


<form action="/user/tambah" method="POST" enctype="multipart/form-data">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">Daftar Akun User</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php echo csrf_field(); ?>
                <div class="content">

                    <div class="form-group">
                        <label>Username</label>
                        <input name='username' class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input name='password' class="form-control" type="password">
                    </div>

                    <div class="form-group">
                        <label>Level</label></br>
                        <select name="level" id="level">
                            <option value="Admin">Admin</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Dosen">Dosen</option>
                        </select>

                    </div>

                    <div class="form-group">
                        </br><button class="btn btn-primary"><i class="fas fa-save"></i> Simpan </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MP2\resources\views/user_add.blade.php ENDPATH**/ ?>