@extends('temp')
@section('isicontent')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary">Master Data Pengguna Klinik</h1> </br>
        @if (session('Pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="fas fa-check-circle"></i> {{ session('Pesan') }} !!! </h5>
        </div>
        @endif
        @if (session('Invalid'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="fas fa-exclamation-triangle"></i> {{ session('Invalid') }} !!! </h5>
        </div>
        @endif
        </br>
        <a href="/users/add" class="btn-sm btn-success"> <i class="fas fa-folder-plus"></i> Tambah Pengguna</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama </th>
                        <th> Email </th>
                        <th> Role </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($users_klinik as $data)
                    <tr>
                        @if($data->email != 'admin@klinik.com') {{-- asumsi admin pakai email ini --}}
                        <td>{{$no++}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->role}}</td>
                        <td>
                            <a href="/users/detail/{{$data->id}}" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> Lihat </a>
                            <a href="/users/edit/{{$data->id}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                            <a href="/users/delete/{{$data->id}}" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i> Hapus </a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>
@endsection
