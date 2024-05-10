@extends('layouts.admin')

@section('content')

<!-- CONTENT -->
<section id="content">

    <!-- MAIN -->
    <main style="margin-left: -280px; width: calc(100% + 280px);">

        <!-- Ubah margin-left menjadi 20px untuk memindahkan konten ke kiri -->
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Admin</a>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>1890</h3>
                    <p>Murid</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3>46</h3>
                    <p>Pengajar</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle'></i>
                <span class="text">
                    <h3>8</h3>
                    <p>Program belajar</p>
                </span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Aktivitas Terbaru</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal daftar</th>
                            <th>Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Mikayla Antasena</p>
                            </td>
                            <td>26-04-2024</td>
                            <td><span class="status completed">TOEFL</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Kanaya Michelle</p>
                            </td>
                            <td>26-04-2024</td>
                            <td><span class="status pending">Intermediate</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>David Rajendra</p>
                            </td>
                            <td>22-04-2024</td>
                            <td><span class="status process">Tingkat dasar</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Arvin Evano</p>
                            </td>
                            <td>21-04-2024</td>
                            <td><span class="status pending">Intermediate</span></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Aileen Clarissa</p>
                            </td>
                            <td>14-04-2024</td>
                            <td><span class="status completed">TOEFL</span></td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- MAIN -->
</section>




@endsection

