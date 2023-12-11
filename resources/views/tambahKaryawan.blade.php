@extends('master2')

@section('konten')
    <div class="container">
        <h2>Tambah Karyawan Baru</h2>

        <a href="/karyawan"> Kembali</a>

        <br/>
        <br/>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/karyawan/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kodepegawai" class="col-md-2 col-form-label">Kode Karyawan:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" placeholder="Masukkan Kode Karyawan">
                </div>
            </div>

            <div class="form-group row">
                <label for="namalengkap" class="col-md-2 col-form-label">Nama Lengkap:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap">
                </div>
            </div>

            <div class="form-group row">
                <label for="divisi" class="col-md-2 col-form-label">Divisi:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukkan Divisi">
                </div>
            </div>

            <div class="form-group row">
                <label for="departemen" class="col-md-2 col-form-label">Departemen:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan Departemen">
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
