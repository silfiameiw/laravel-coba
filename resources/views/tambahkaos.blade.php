@extends('master2')

@section('konten')
    <div class="container">
        <h2><a href="https://www.kaosstore.com">www.kaosstore.com</a></h2>
        <h3>Tambah Kaos Baru</h3>

        <a href="/kaos"> Kembali</a>

        <br/>
        <br/>

        <form action="/kaos/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="merk" class="col-md-2 col-form-label">Merk Kaos:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan Merk Kaos">
                </div>
            </div>

            <div class="form-group row">
                <label for="stok" class="col-md-2 col-form-label">Jumlah Stok:</label>
                <div class="col-md-10">
                    <input type="number" class="form-control" id="stok" name="stock" placeholder="Masukkan Jumlah Stok">
                </div>
            </div>

            <div class="form-group row">
                <label for="tersedia" class="col-md-2 col-form-label">Tersedia:</label>
                <div class="col-md-10">
                    <select class="form-control" id="tersedia" name="tersedia">
                        <option value="Y">Ya</option>
                        <option value="N">Tidak</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-10 offset-md-2">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
@endsection
