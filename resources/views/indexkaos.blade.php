@extends('master2')
@section('title', 'Data Kaos')

@section('judul_halaman')
    <h2>www.kaosstore.com</h2>
    <h3>Data Kaos</h3>
    <a class="btn btn-success" href="/kaos/tambah"> + Tambah Kaos Baru</a>
    <br/>
    <br/>
@endsection

@section('konten')
    <p>Cari Data Kaos :</p>
    <form action="/kaos/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Kaos Berdasarkan Merk..." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary mb-4 mt-2">
    </form>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Merk Kaos</th>
            <th>Jumlah Stok</th>
            <th>Kesediaan Produk</th>
            <th>Opsi</th>
        </tr>
        @foreach($kaos as $k)
        <tr>
            <td>{{ $k->kodekaos }}</td>
            <td>{{ $k->merkkaos }}</td>
            <td>{{ $k->stockkaos }}</td>
            <td>{{ $k->tersedia }}</td>
            <td>
                <a class="btn btn-success" href="/kaos/view/{{ $k->kodekaos }}">View</a>
                |
                <a class="btn btn-warning" href="/kaos/edit/{{ $k->kodekaos }}">Edit</a>
                |
                <a class="btn btn-danger" href="/kaos/hapus/{{ $k->kodekaos }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $kaos->links() }}
@endsection
