@extends('temp')
@section('isicontent')
<div class="card shadow mb-8">
    <div class="card-header py-6">
        <table align="center" class="col-sm-12">
            <tr>
                <td>
                    <h1 class="m-0 font-weight-bold text-primary"> Detail Akun User </h1>
                </td>
                <td>
                    <h1 class="m-0 font-weight-bold text-center"> ---------------------------------- </h1>
                </td>
            </tr>
        </table>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th width="100px">Nama</th>
                <th width="30px">:</th>
                <th>{{ $users_klinik->name }}</th>
            </tr>

            <tr>
                <th width="100px">Email</th>
                <th width="30px">:</th>
                <th>{{ $users_klinik->email }}</th>
            </tr>

            <tr>
                <th width="100px">Role</th>
                <th width="30px">:</th>
                <th>{{ ucfirst($users_klinik->role) }}</th>
            </tr>
        </table>
        <a href="/users/" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back </a>
    </div>
</div>
@endsection
