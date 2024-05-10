@extends('layouts.admin')

@section('content')
<form action="/tambah-peserta" method="POST">
    @csrf
    <h1 style="font-family: 'Poppins'; font-weight: bold; font-size: 24px; color: #00000;">Data Peserta</h1>
<div class="form-group p-3" style="font-family: 'Poppins', sans-serif; background-color: #ffffff;">
    <label>Paket</label>
    <input type="text" name='paket' class="form-control" placeholder="Masukan Paket yang diambil">
    @error('paket')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group p-3" style="font-family: 'Poppins', sans-serif; background-color: #ffffff;">
    <label>Nama Lengkap</label>
    <input type="text" name='nama' class="form-control" placeholder="Masukan Nama Lengkap">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group p-3" style="font-family: 'Poppins', sans-serif; background-color: #ffffff;">
    <label>Umur</label>
    <input type="number" name='umur' class="form-control" placeholder="Masukan umur">
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group p-3" style="font-family: 'Poppins', sans-serif; background-color: #ffffff;">
    <label>Alamat</label>
    <input type="text" name='alamat' class="form-control" placeholder="Masukan Alamat">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group p-3" style="font-family: 'Poppins', sans-serif; background-color: #ffffff;">
    <label>Sekolah</label>
    <input type="text" name='sekolah' class="form-control" placeholder="Masukan Nama Sekolah">
    @error('sekolah')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group p-3" style="font-family: 'Poppins', sans-serif; background-color: #ffffff;">
    <label>Jenis Kelamin</label>
    <input type="text" name='jeniskelamin' class="form-control" placeholder="Masukan Jenis Kelamin">
    @error('jeniskelamin')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="p-3" style="background-color: #ffffff;">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>


</form>
@endsection
