<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>

    <!-- Tautkan CSS Eksternal -->
    <link rel="stylesheet" href="{{ asset('public/style.css') }}">
    
</head>
<body>

    <!-- Isi halaman Anda disini -->
    
    @extends('layouts.admin')

    @section('judul')
    Detail Profil Peserta
    @endsection

    @section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Data Profil Peserta ke {{$peserta->id}}</h4>
                <div class="card-info">
                    <p><strong>Paket:</strong> {{$peserta->paket_id}}</p>
                    <p><strong>Nama:</strong> {{$peserta->nama}}</p>
                    <p><strong>Umur:</strong> {{$peserta->umur}}</p>
                    <p><strong>Alamat:</strong> {{$peserta->alamat}}</p>
                    <p><strong>Sekolah:</strong> {{$peserta->sekolah}}</p>
                    <p><strong>Jenis Kelamin:</strong> {{$peserta->jenis_kelamin}}</p>
                </div>
            </div>
        </div>

        <a href="/peserta" class="btn">Kembali</a>
    </div>

    @endsection

</body>
</html>
