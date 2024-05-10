@extends('layouts.admin')

@section('content')
<div class="p-3" style="font-family: 'Poppins', sans-serif; background-color: #ffffff;">
    <h1 style="font-family: 'Poppins'; font-weight: bold; font-size: 24px; color: #00000;">Data Peserta</h1>
    <a href="/tambah-peserta" class="btn btn-primary my-3">Tambah Data Peserta</a>
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
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($peserta as $key => $value)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $value->paket_id }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->umur }}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->sekolah }}</td>
                <td>{{ $value->jenis_kelamin }}</td>
                <td class="mr-3">
                    <a href="/peserta/{{ $value->id }}" class="btn btn-info">Show</a>
                    <a href="/peserta/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                    <a href="/peserta/{{ $value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                </td>
            </tr>
            {{-- tidak ada data --}}
        </tbody>
        @empty
        <tr colspan="7">
            <td>No data</td>
        </tr>
        @endforelse
    </table>
</div>
@endsection

