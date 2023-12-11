@extends('master2')
@section('title', 'Database Karyawan')

@section('judul_halaman')
    <h2>By: Silfia - 5026221073</h2>
    <h3>Data Karyawan</h3>
    <p>Cari Data Karyawan :</p>
    <form action="/karyawan/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Karyawan Berdasarkan Nama..." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary mb-4 mt-2">
    </form>
    <br/>
    <br/>
@endsection

@section('konten')
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Karyawan</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach($karyawan as $k)
        <tr>
            <td>{{ $k->kodekaryawan }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
                <a class="btn btn-success" href="/karyawan/view/{{ $k->kodekaryawan }}">View</a>
                |
                <a class="btn btn-warning" href="/karyawan/edit/{{ $k->kodekaryawan }}">Edit</a>
                |
                <a class="btn btn-danger" href="/karyawan/hapus/{{ $k->kodekaryawan }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $karyawan->links() }}
    <a class="btn btn-success" href="/karyawan/tambah"> + Tambah Karyawan Baru</a>
@endsection
