@extends('layouts.app')

@section('content')
    <section id="scholarship-section" class="sec1 py-5">
        <div class="container text-center">
            <h1 class="subtitle position-relative d-inline-block mb-5">CHOOSE A SCHOLARSHIP
                <span class="rounded position-absolute d-inline-block bg-primary" style="width: 12rem; height: 4px; bottom: -10px; left: 50%; transform: translateX(-50%);"></span>
            </h1>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title fw-bold text-primary">Beasiswa Akademik</h3>
                            <p class="card-text">Beasiswa yang diberikan untuk mahasiswa dengan prestasi akademik yang luar biasa. Tersedia bagi yang memiliki prestasi akademik yang memenuhi kriteria tertentu.</p>
                            <a href="{{ route('beasiswa.create') }}" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title fw-bold text-primary">Beasiswa Non-Akademik</h3>
                            <p class="card-text">Beasiswa yang diberikan untuk mahasiswa dengan prestasi di bidang non-akademik seperti olahraga, seni, atau kegiatan sosial.</p>
                            <a href="{{ route('beasiswa.create') }}" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
