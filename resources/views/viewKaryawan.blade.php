@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Detail Karyawan</h3>

    <a href="/karyawan"> Kembali</a>

    <br/>
    <br/>

    @foreach($karyawan as $k)
        <div class="row">
            <!-- Kolom untuk Detail Karyawan -->
            <div class="col-md-8">
                <div>
                    <strong>Kode Karyawan:</strong> {{ $k->kodepegawai }}
                </div>
                <div>
                    <strong>Nama Lengkap:</strong> {{ $k->namalengkap }}
                </div>
                <div>
                    <strong>Divisi:</strong> {{ $k->divisi }}
                </div>
                <div>
                    <strong>Departemen:</strong> {{ $k->departemen }}
                </div>

                <br>
                <a href="/karyawan" class="btn btn-success">OK</a>
            </div>
        </div>
    @endforeach

@endsection
