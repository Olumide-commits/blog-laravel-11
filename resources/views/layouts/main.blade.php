<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    @auth
<<<<<<< HEAD
                        <img src="{{ auth()->user()->image }}" class="img-circle elevation-2" height="50" width="50" alt="">
=======
                        <img src="{{ auth()->user()->image }}" class="img-circle elevation-2" height="32" width="32" alt="user image">
>>>>>>> origin/main
                    @else
                        <i class="fas fa-user-cog"></i>
                    @endauth
                </a>
                <div class="dropdown-menu">
                    @auth
                        <a href="{{ route('user.show', auth()->user()->id) }}" class="dropdown-item">
                            <i class="fas fa-id-card"></i> Profile
                        </a>

                        <div class="media dropdown-item">
                            <form action="/logout" method="post">
                                @csrf
                                <i class="fas fa-sign-out-alt"></i>
                                <button type="submit">
                                    Log out
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login.user') }}" class="dropdown-item">
                            <i class="fas fa-user-circle"></i> Log in
                        </a>
                        <a href="{{ route('register.user') }}" class="dropdown-item">
                            <i class="fas fa-pencil-alt"></i> Register
                        </a>
                    @endauth
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
<<<<<<< HEAD
            <span class="brand-text font-weight-light">Admin panel</span>
=======
            <span class="brand-text font-weight-light">Shop admin</span>
>>>>>>> origin/main
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('product.index') }}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Products
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-sitemap"></i>
                            <p>
                                Categories
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tag.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>
                                Tags
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('color.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-palette"></i>
                            <p>
                                Colors
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
        @if(session()->has('success'))
            <div x-data="{ show: true }"
                 x-init="setTimeout(() => show = false, 4000)"
                 x-show="show"
                 class="fixed bg-blue text-white py-2 px-4 rounded-xl bottom-3 right-0 text-sm"
            >
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2024 <a href="#">Shop</a>.</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>

<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $('.tags').select2()
</script>
<script>
    $('.colors').select2()
</script>
<<<<<<< HEAD
<script>
    document.querySelector('.custom-file-input').addEventListener('change', function (e) {
        var fileName = document.getElementById("exampleInputFile").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
    });


</script>
=======
>>>>>>> origin/main
</body>
</html>
