
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('Tema/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('Tema/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Tema/dist/css/adminlte.min.css')}}">
</head>
<body>
<!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-primary">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <div class="container">
                    <h2>@yield('subtitle')</h2>
                </div>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-primary">
            <a href="/" class="brand-link">
                <h4 class="brand-text font-weight-light">Jalaludin</h4>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Master<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dompet" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i><p>Dompet</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kategori" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i> <p>Kategori</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Transaksi<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/masuk" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i> <p>Masuk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/keluar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i> <p>Keluar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/laporan" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
                    @yield('container')
        <!--footer-->
        <footer class="main-footer">
            <strong>Maju Bersama Atomic Indonesia</strong>
        </footer>
    </div>

<!-- jQuery -->
<script src="js/app.js"></script>
<script src="js/bootstrap.js"></script>
<script src="{{ asset('Tema/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Tema/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('Tema/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('Tema/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('Tema/dist/js/demo.js')}}"></script>
</body>
</html>
