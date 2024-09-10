@extends('layouts.app')

@section('content')
    <div class="container py-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white text-center">
                <h5 class="card-title mb-0">Data Beasiswa</h5>
            </div>
            <div class="card-body">
                @if ($beasiswas->isEmpty())
                    <div class="alert alert-info text-center" role="alert">
                        Belum ada data beasiswa yang ditambahkan.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Semester</th>
                                    <th>IPK</th>
                                    <th>Jenis Beasiswa</th>
                                    <th>Berkas</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beasiswas as $beasiswa)
                                    <tr>
                                        <td>{{ $beasiswa->name }}</td>
                                        <td>{{ $beasiswa->email }}</td>
                                        <td>{{ $beasiswa->phone }}</td>
                                        <td>{{ $beasiswa->semester }}</td>
                                        <td>{{ $beasiswa->gpa }}</td>
                                        <td>{{ $beasiswa->scholarship_type }}</td>
                                        <td>
                                            @if ($beasiswa->document)
                                                <a href="{{ Storage::url($beasiswa->document) }}" class="btn btn-sm btn-outline-primary" target="_blank">Lihat Berkas</a>
                                            @else
                                                <span class="text-muted">Tidak Ada</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-info">{{ $beasiswa->status_ajuan }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
