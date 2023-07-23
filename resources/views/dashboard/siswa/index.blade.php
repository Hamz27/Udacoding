@extends('master.app')
@section('siswaActive','active')
@section('content')

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3" style="display: flex; justify-content: space-between;">
        <h4 class="m-0 font-weight-bold text-primary">Tabel Siswa</h4>
        <a href="/form-siswa" class="btn btn-primary btn-sm">Tambah Siswa</a>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @php $no=1 @endphp
                @foreach($siswas as $sis)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $sis->nim }}</td>
                    <td>{{ $sis->nama }}</td>
                    <td>{{ $sis->jk }}</td>
                    <td>{{ $sis->tgllahir }}</td>
                    <td>{{ $sis->alamat }}</td>
                    <td>
                        <form action="{{ route('siswa.destroy',$sis->id) }}" method="POST">
                            <a class="btn btn-sm btn-warning" href="{{ route('siswa.edit', $sis->id) }}">Edit</a>

                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection