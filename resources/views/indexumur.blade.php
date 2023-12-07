@extends('master2')
@section('title', 'Database Pegawai')


    @section('judul_halaman')
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>




	<a class="btn btn-success" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    @endsection


    @section('konten')
    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai Berdasarkan Nama..." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary mb-4 mt-2">

    </form>

	<table class="table table-striped table-hover">
		<tr>
            <!-- kalau pake bootstrap, headernya jangan pakai td, tapi pakai th, kalau pakai td ngga kedetec!-->
			<th>Nama</th>
			<th>Jabatan</th>
			<th
            {{-- @if ()
            class="bg-danger text-warnin"
            @else ()
            @endif --}}

            >Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td

            @if($p->pegawai_umur <= 30)
                class="bg-black text-white"
            @else
                class="bg-red text-white"
            @endif

            >{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-success" href="/pegawai/view/{{ $p->pegawai_id }}">View</a>
                |
                <a class="btn btn-warning" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
@endsection
