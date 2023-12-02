@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Detail Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br/>
    <br/>

    @foreach($pegawai as $p)
        <div class="row">
            <!-- Kolom untuk Foto Pegawai -->
            <div class="col-md-4">
                <img src="{{ asset('path/to/your/image.jpg') }}" alt="Foto Pegawai" class="img-fluid mb-3">
                <!-- Ganti 'path/to/your/image.jpg' dengan path yang benar ke gambar pegawai -->
            </div>

            <!-- Kolom untuk Detail Pegawai -->
            <div class="col-md-8">
                <div>
                    <strong>ID:</strong> {{ $p->pegawai_id }}
                </div>
                <div>
                    <strong>Nama:</strong> {{ $p->pegawai_nama }}
                </div>
                <div>
                    <strong>Jabatan:</strong> {{ $p->pegawai_jabatan }}
                </div>
                <div>
                    <strong>Umur:</strong> {{ $p->pegawai_umur }}
                </div>
                <div>
                    <strong>Alamat:</strong> {{ $p->pegawai_alamat }}
                </div>

                <br>
                <a href="/pegawai" class="btn btn-success">OK</a>
            </div>
        </div>
    @endforeach

@endsection
