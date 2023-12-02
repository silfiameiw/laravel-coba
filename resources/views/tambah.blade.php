@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class = "form-inline">
            <label for = "nama" class = "control-label">Nama</label>
            <div class = "col-sm-8">
               <input type="text" name = "nama" class = "form-control" id = "nama" placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>
        <br>
        <div class = "form-inline">
            <label for = "jabatan" class = "control-label">Jabatan</label>
            <div class = "col-sm-8">
               <input type="text" name = "jabatan" class = "form-control" id = "jabatan" placeholder = "Masukkan Jabatan Pegawai">
            </div>
        </div>
        <br>
        <div class = "form-inline">
            <label for = "umur" class = "control-label">Umur</label>
            <div class = "col-sm-8">
               <input type="number" name = "umur" class = "form-control" id = "umur" placeholder = "Masukkan Umur Pegawai">
            </div>
        </div>
        <br>
        <div class = "form-inline">
            <label for = "alamat" class = "control-label">Alamat</label>
            <div class = "col-sm-8">
               <textarea name = "alamat" class = "form-control" id = "Alamat" placeholder = "Masukkan Alamat Pegawai"></textarea>
            </div>
        </div>
        <br>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
