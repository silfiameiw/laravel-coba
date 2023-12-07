@extends('master2')

@section('konten')
    <h2><a href="https://www.kaosstore.com">www.kaosstore.com</a></h2>
    <h3>Edit Kaos</h3>

    <a href="/kaos"> Kembali</a>

    <br/>
    <br/>

    @foreach($kaos as $k)
        <form action="/kaos/update" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="id" class="col-md-2 col-form-label">ID:</label>
                <div class="col-md-10">
                    <input name="id" class="form-control" id="id" placeholder="Masukkan ID Kaos" value="{{ $k->kodekaos }}" type="text" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="merk" class="col-md-2 col-form-label">Merk Kaos:</label>
                <div class="col-md-10">
                    <input name="merk" class="form-control" id="merk" placeholder="Masukkan Merk Kaos" value="{{ $k->merkkaos }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-md-2 col-form-label">Jumlah Stok:</label>
                <div class="col-md-10">
                    <input name="stok" class="form-control" id="stok" placeholder="Masukkan Jumlah Stok" value="{{ $k->stockkaos }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-md-2 col-form-label">Tersedia:</label>
                <div class="col-md-10">
                    <select class="form-control" id="tersedia" name="tersedia">
                        <option value="Y" {{ $k->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                        <option value="N" {{ $k->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
                    </select>
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
