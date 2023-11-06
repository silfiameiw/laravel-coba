<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, ">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Ambil dari file lain -->
    <script src="pertemuan5/operasi.js"></script>
</head>

<body>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="bil1">Bilangan 1:</label>
                <input type="number" id="bil1" class="form-control">
            </div>

            <div class="form-group">
                <label for="bil2">Bilangan 2:</label>
                <input type="number" id="bil2" class="form-control">
            </div>

            <input type="button" value="Penjumlahan" class="btn btn-primary" onclick="tambah();">
            <input type="button" value="Perkalian" class="btn btn-info" onclick="kali();">
            <input type="reset" value="Ulangi" class="btn btn-danger">

            <h3>Hasil Operasi: <div id="hasil"></div></h3>
        </form>
    </div>
</body>
</html>
