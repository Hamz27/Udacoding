@extends('master.app')
@section('adminActive','active')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Tabel History Admin</h4>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>ID Siswa</th>
                    <th>Action</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>ID Siswa</th>
                    <th>Action</th>
                    <th>Tanggal</th>
                </tr>
            </tfoot>
            <tbody>
                @php $no=1 @endphp
                @foreach($admins as $ad)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $ad->user_id }}</td>
                    <td>{{ $ad->siswa_id }}</td>
                    <td>{{ $ad->action}}</td>
                    <td>{{ $ad->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Tabel Admin</h4>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </tfoot>
            <tbody>
                @php $no=1 @endphp
                @foreach($users as $us)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $us->id }}</td>
                    <td>{{ $us->name }}</td>
                    <td>{{ $us->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection