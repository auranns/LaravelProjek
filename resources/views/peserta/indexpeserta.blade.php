@extends('layouts.admin')


@section('judul')
Data Peserta
@endsection
  <!-- Page Heading -->


@section('content')

<div class="p-3">
<a href="/tambah-peserta" class="btn btn-primary my-3">Tambah Data
Peserta</a>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Paket</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Jenis Kelamin</th>

          </tr>
          </thead>
          <tbody>
          @forelse ( $peserta as $key => $value )
          <tr>
              <th scope="row">{{ $key + 1 }}</th>
              <td>{{ $value->paket_id}}</td>
              <td>{{ $value->nama}}</td>
              <td>{{ $value->umur}}</td>
              <td>{{ $value->alamat}}</td>
              <td>{{ $value->sekolah}}</td>
              <td>{{ $value->jenis_kelamin}}</td>
              <td class="mr-3">
                  <a href="/peserta/{{ $value->id }}" class="btn btn-info">Show </a>
                  <a href="/peserta/{{ $value->id }}/edit" class="btn btn-primary">Edit </a>
                  <a href="/peserta/{{ $value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
              </td>
          </tr>
            {{-- tidak ada data --}}
          </tbody>
          @empty
            <tr colspan="6">
                <td>No data</td>
            </tr>
          @endforelse
          
        </table>
</div>
@endsection



<link rel="stylesheet" type="text/css"
href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>

