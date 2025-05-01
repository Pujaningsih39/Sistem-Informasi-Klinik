@extends('temp')
@section('isicontent')

<form action="/users/tambah" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card shadow mb-4">

        <div class="card-header py-6">
            <h1 class="m-0 font-weight-bold text-primary text-center">Halaman Tambah Akun Pengguna</h1>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div class="content">

                    <div class="form-group">
                        <label>Nama</label>
                        <input name='name' class="form-control" value="{{ old('name') }}">
                        <div class="text-danger">
                            @error('name') {{ $message }} @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input name='email' type="email" class="form-control" value="{{ old('email') }}">
                        <div class="text-danger">
                            @error('email') {{ $message }} @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input name='password' type="password" class="form-control">
                        <div class="text-danger">
                            @error('password') {{ $message }} @enderror
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
                            @error('role') {{ $message }} @enderror
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

@endsection
