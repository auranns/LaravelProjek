@extends('layouts.admin')

@section('judul')
  
@endsection

@section('content')
<div class="p-3">
    <h2>Edit Data Peserta {{$peserta->id}} </h2>
        <form action="/peserta/{{$peserta->id}}" method="POST">
            @csrf
           @method('PUT')
    <div class="form-group p-3">
        <label>Paket</label>
        <input type="text" name='paket' class="form-control" value="{{$peserta->paket_id}}" id="paket_id" placeholder="Masukan Paket yang diambil">
        @error('paket')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group p-3">
        <label>Nama Lengkap</label>
        <input type="text" name='nama' class="form-control" value="{{$peserta->nama}}" id="nama" placeholder="Masukan Nama Lengkap">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Umur</label>
        <input type="number" name='umur' class="form-control" value="{{$peserta->umur}}" id="umur" placeholder="Masukan umur">
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Alamat</label>
        <input type="text" name='alamat' class="form-control" value="{{$peserta->alamat}}" id="alamat" placeholder="Masukan Alamat">
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Sekolah</label>
        <input type="text" name='sekolah' class="form-control" value="{{$peserta->sekolah}}" id="sekolah" placeholder="Masukan Nama Sekolah">
        @error('sekolah')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Jenis Kelamin</label>
        <input type="text" name='jeniskelamin' class="form-control" value="{{$peserta->jenis_kelamin}}" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin">
        @error('jeniskelamin')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
            </div>
            <a href="/peserta" class="btn btn-success my-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
</div>
 
@endsection

