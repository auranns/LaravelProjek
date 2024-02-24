@extends('layouts.admin')

@section('judul', 'Tambah Profil Peserta')

@section('content')
<form action="/tambah-peserta" method="POST">
    @csrf

    <div class="form-group p-3">
        <label>Paket</label>
        <input type="text" name='paket' class="form-control" placeholder="Masukan Paket yang diambil">
        @error('paket')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Nama Lengkap</label>
        <input type="text" name='nama' class="form-control" placeholder="Masukan Nama Lengkap">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Umur</label>
        <input type="number" name='umur' class="form-control" placeholder="Masukan umur">
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Alamat</label>
        <input type="text" name='alamat' class="form-control" placeholder="Masukan Alamat">
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Sekolah</label>
        <input type="text" name='sekolah' class="form-control" placeholder="Masukan Nama Sekolah">
        @error('sekolah')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Jenis Kelamin</label>
        <input type="text" name='jeniskelamin' class="form-control" placeholder="Masukan Jenis Kelamin">
        @error('jeniskelamin')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="p-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection
