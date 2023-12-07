@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Detail Kaos</h3>

    <a href="/kaos"> Kembali</a>

    <br/>
    <br/>

    @foreach($kaos as $k)
        <div class="row">
            <!-- Kolom untuk Detail Kaos -->
            <div class="col-md-8">
                <div>
                    <strong>Kode Kaos:</strong> {{ $k->kodekaos }}
                </div>
                <div>
                    <strong>Merk Kaos:</strong> {{ $k->merkkaos }}
                </div>
                <div>
                    <strong>Stock Kaos:</strong> {{ $k->stockkaos }}
                </div>
                <div>
                    <strong>Tersedia:</strong> {{ $k->tersedia }}
                </div>

                <br>
                <a href="/kaos" class="btn btn-success">OK</a>
            </div>
        </div>
    @endforeach

@endsection
