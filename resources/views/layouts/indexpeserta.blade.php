@extends('layouts.admin')

@section('judul')
Data Peserta
@endsection
    <!-- Page Heading -->

@section('tabel')

<div class="p-3">
<a href="/tambahpeserta" class="btn btn-primary my-3">Tambah Data
Peserta</a>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th scope="col">Paket</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Jenis Kelamin</th>
          </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
</div>
@endsection

<link rel="stylesheet" type="text/css"
href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>