<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='{{ asset ('https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css') }}' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset ('adminpage/style.css') }}">

    <title>Admin Page</title>
</head>
<body>
<nav>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
    </form>

    <a href="#" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num">8</span>
    </a>
    <a href="#" class="profile">
        <img src="{{ asset('adminpage/img/people.jpeg') }}">
    </a>
</nav>
<!-- NAVBAR -->
    
    <script src="{{ asset('adminpage/script.js') }}"></script>
</body>
</html>

