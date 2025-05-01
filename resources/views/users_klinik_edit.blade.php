@extends('temp')
@section('isicontent')

<form action="/users/update/{{$users_klinik->id}}" method="POST">
    @csrf
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
                            <input name="name" class="form-control" value="{{ $users_klinik->name }}">
                            <div class="text-danger">
                                @error('name') {{ $message }} @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" value="{{ $users_klinik->email }}">
                            <div class="text-danger">
                                @error('email') {{ $message }} @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>Role Saat Ini: <strong>{{ ucfirst($users_klinik->role) }}</strong></label><br>
                            <label>Edit Role</label>
                            <select name="role" class="form-control">
                                <option value="">Pilih Role...</option>
                                <option value="admin" {{ $users_klinik->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="petugas" {{ $users_klinik->role == 'petugas' ? 'selected' : '' }}>Petugas</option>
                                <option value="dokter" {{ $users_klinik->role == 'dokter' ? 'selected' : '' }}>Dokter</option>
                                <option value="kasir" {{ $users_klinik->role == 'kasir' ? 'selected' : '' }}>Kasir</option>
                            </select>
                            <div class="text-danger">
                                @error('role') {{ $message }} @enderror
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
@endsection
