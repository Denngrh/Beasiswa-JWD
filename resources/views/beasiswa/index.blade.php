@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">Data Beasiswa</h5>
            </div>
            <div class="card-body">
                @if ($beasiswas->isEmpty())
                    <div class="alert alert-info text-center" role="alert">
                        Belum ada data beasiswa yang ditambahkan.
                    </div>
                @else
                    <table class="table table-bordered table-striped">
                        <thead>
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
                                            <a href="{{ Storage::url($beasiswa->document) }}" target="_blank">Lihat Berkas</a>
                                        @else
                                            Tidak Ada
                                        @endif
                                    </td>
                                    <td>{{ $beasiswa->status_ajuan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
