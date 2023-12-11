<!DOCTYPE html>
<html>

<head>
    <title>@yiled('Silfia Mei - 5026221073')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Siflia Mei Wulandari - 5026221073</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                  </li>
                <li class="nav-item">
                <a class="nav-link" href="/kaos">Kaos - Tugas PRA EAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/karyawan">Karyawan - Soal EAS Kode DD</a>
              </li>

              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Database
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/pegawai">Pegawai</a>
                  <a class="dropdown-item" href="/kaos">Kaos - Tugas Pra EAS</a>
                  <a class="dropdown-item" href="/karyawan">Karyawan - Kode Soal DD</a>
                </div>
              </li>
            </ul>
          </nav>
        <hr />


        <!-- bagian judul halaman blog -->
        <div class="container">
        <h3> @yield('judul_halaman') </h3>

        @yield('header')

        @yield('isihalaman')
        <!-- bagian konten blog -->
        <!-- Alert Section -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('konten')


        <br />
        <br />
        <hr />
        <footer>
            <p>&copy; <a href="https://github.com/silfiameiw">Silfia Mei Wulandari</a>. 2023</p>
        </footer>

    </div>
</body>

</html>
