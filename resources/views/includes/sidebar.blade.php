<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset ('adminpage/style.css') }}">

    <title>Bubble Academy</title>
</head>
<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Admin</span>
        </a>
        <ul class="side-menu top">
            <li class="#">
                <a href="/dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/peserta">
                    <i class='bx bx-user'></i>
                    <span class="text">Data Peserta</span>
                </a>
            </li>
            <li>
                <a href="/landingpage">
                    <i class='bx bx-home'></i>
                    <span class="text">Landing page</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
           
            @if(Auth::check())
            <li>
                <a href="/login" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
            @endif
            
        </ul>
    </section>
    <!-- SIDEBAR -->

    <script src="{{ asset('adminpage/script.js') }}"></script>
</body>
</html>

