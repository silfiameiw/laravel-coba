@extends('master2')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class = "form-inline">
            <label for = "id" class = "control-label"></label>
            <div class = "col-sm-8">
               <input name = "id" class = "form-control" id = "id" placeholder = "Masukkan Nama Pegawai" value="{{ $p->pegawai_id }}" type="hidden">
            </div>
        </div>
        <br>
        <div class = "form-inline">
            <label for = "nama" class = "control-label">Nama</label>
            <div class = "col-sm-8">
               <input name = "nama" class = "form-control" id = "nama" placeholder = "Masukkan Nama Pegawai" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <br>
        <div class = "form-inline">
            <label for = "jabatan" class = "control-label">Jabatan</label>
            <div class = "col-sm-8">
               <input name = "jabatan" class = "form-control" id = "jabatan" placeholder = "Masukkan Jabatan Pegawai" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <br>
        <div class = "form-inline">
            <label for = "umur" class = "control-label">umur</label>
            <div class = "col-sm-8">
               <input name = "umur" class = "form-control" id = "umur" placeholder = "Masukkan Umur Pegawai" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <br>
        <div class = "form-inline">
            <label for = "alamat" class = "control-label">Alamat</label>
            <div class = "col-sm-8">
               <input name = "alamat" class = "form-control" id = "alamat" placeholder = "Masukkan Alamat Pegawai" value="{{ $p->pegawai_alamat }}">
            </div>
        </div>
        <br>


        <br>
		{{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/> --}}
		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection
