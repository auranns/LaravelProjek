<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body style="background-color: #add8e6;">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card" style="border: 1px solid #ced4da; border-radius: 10px;">
                <div class="card-header" style="color: #00000; font-family: 'Poppins', sans-serif;">
                    <h1 class="card-title" style="margin-bottom: 0; font-size: 24px;">Login</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert" style="margin-bottom: 1rem; border-radius: .25rem; background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; font-family: 'Poppins', sans-serif;">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary" style="background-color: #007bff; border-color: #007bff; font-family: 'Poppins', sans-serif;">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <p>Don't have an account? <a href="{{ route('register') }}" style="color: #007bff; font-family: 'Poppins', sans-serif;">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

