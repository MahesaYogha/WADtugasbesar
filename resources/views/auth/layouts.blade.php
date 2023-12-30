<!DOCTYPE html>
<html>

<head>
    <title>Admin Ujung Landasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('addStyle')
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Ujung Landasan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" href="{{ url('admin/menu') }}">Menu</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/about_us') }}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/masukan') }}">Masukan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
=======
                        <a class="nav-link" href="{{ url('admin/menu') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/menu') }}">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/menu') }}">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/menu') }}">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}"><b>Logout</b></a>
>>>>>>> aa5e2beffcbe9d1892c8e1b024ea390b9e8bda29
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>

</html>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@yield('addScript')