@extends('master2')

@section('konten')
    <h2>Edit Karyawan</h2>

    <a href="/karyawan"> Kembali</a>

    <br/>
    <br/>

    @foreach($karyawan as $k)
        <form action="/karyawan/update" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kodepegawai" class="col-md-2 col-form-label">Kode Karyawan:</label>
                <div class="col-md-10">
                    <input name="kodepegawai" class="form-control" id="kodepegawai" placeholder="Masukkan Kode Karyawan" value="{{ $k->kodepegawai }}" type="text" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkap" class="col-md-2 col-form-label">Nama Lengkap:</label>
                <div class="col-md-10">
                    <input name="namalengkap" class="form-control" id="namalengkap" placeholder="Masukkan Nama Lengkap" value="{{ $k->namalengkap }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="divisi" class="col-md-2 col-form-label">Divisi:</label>
                <div class="col-md-10">
                    <input name="divisi" class="form-control" id="divisi" placeholder="Masukkan Divisi" value="{{ $k->divisi }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="departemen" class="col-md-2 col-form-label">Departemen:</label>
                <div class="col-md-10">
                    <input name="departemen" class="form-control" id="departemen" placeholder="Masukkan Departemen" value="{{ $k->departemen }}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-10 offset-md-2">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>
            </div>
        </form>
    @endforeach
@endsection
