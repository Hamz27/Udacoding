@extends('master.app')
@section('siswaActive','active')
@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <h2>Input Data Siswa</h2>
        </div>
        <div class="card-body">
            <form name="siswa" id="siswa" method="post" action="{{url('store-siswa')}}">
                @csrf
                <div class="form-group" style="margin-top: 10px;">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" class="@error('nim') is-invalid @enderror form-control">
                    @error('nim')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="@error('nama') is-invalid @enderror form-control">
                    @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-select @error('jk') is-invalid @enderror form-control" id="jk" name="jk" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="tgllahir">Tanggal Lahir</label>
                    <input type="date" id="tgllahir" name="tgllahir" class="@error('nama') is-invalid @enderror form-control">
                    @error('tgllahir')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="@error('alamat') is-invalid @enderror form-control" style="height: 70px;">
                    @error('alamat')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection