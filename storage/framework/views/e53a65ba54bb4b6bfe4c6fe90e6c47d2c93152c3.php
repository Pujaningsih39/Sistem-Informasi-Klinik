
<?php $__env->startSection('isicontent'); ?>

<form action="/masterdosen/tambah" method="POST" enctype="multipart/form-data">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">Tambahkan Data Dosen</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php echo csrf_field(); ?>
                <div class="content">

                    <div class="form-group">
                        <label>NIP</label>
                        <input name='nip' class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input name='nama' class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label></br>
                        <select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-laki</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Agama</label></br>
                        <select name="agama" id="jenis_kelamin">
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input name='alamat' class="form-control">
                    </div>

                    <div class="form-group">
                        <label>No Telepon</label>
                        <input name='no_telp' class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input name='email' class="form-control">
                    </div>

                    <div class="form-group">
                        </br><button class="btn btn-primary">Simpan</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miniproject_2\resources\views/add_masterdosen.blade.php ENDPATH**/ ?>