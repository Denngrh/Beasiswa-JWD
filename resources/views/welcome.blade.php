@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Pilihan Beasiswa</h1>

    <div class="row justify-content-center">
        <!-- Card Beasiswa Akademik -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Beasiswa Akademik
                </div>
                <div class="card-body">
                    <p>Beasiswa untuk mahasiswa dengan prestasi akademik yang luar biasa.</p>
                    <a href="{{ route('beasiswa.create') }}" class="btn btn-primary">Daftar Beasiswa Akademik</a>
                </div>
            </div>
        </div>

        <!-- Card Beasiswa Non-Akademik -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Beasiswa Non-Akademik
                </div>
                <div class="card-body">
                    <p>Beasiswa untuk mahasiswa dengan prestasi di bidang non-akademik.</p>
                    <a href="{{ route('beasiswa.create') }}" class="btn btn-primary">Daftar Beasiswa Non-Akademik</a>
                </div>
            </div>
        </div>
    </div>
@endsection
