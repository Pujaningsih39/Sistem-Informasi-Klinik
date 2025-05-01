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
        <a href="/pegawai /add" class="btn-sm btn-success"> <i class="fas fa-folder-plus"></i> Tambah Pengguna</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> no_pegawai </th>
                        <th> nama </th>
                        <th> Jabatan </th>
                        <th> no_telp </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($pegawai as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->no_pegawai}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->Jabatan}}</td>
                        <td>{{$data->no_telp}}</td>
                        <td>
                            <a href="/pegawai/detail/{{$data->id}}" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> Lihat </a>
                            <a href="/pegawai/edit/{{$data->id}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit </a>
                            <a href="/pegawai/delete/{{$data->id}}" class="btn btn-sm btn-danger"><i class="fas fa-eraser"></i> Hapus </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>
@endsection
