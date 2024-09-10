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
                                
                                {{-- <td>
                                    <a href="{{ route('beasiswa.edit', $beasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('beasiswa.destroy', $beasiswa->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Hapus</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
