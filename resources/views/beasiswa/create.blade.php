@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">Formulir Pendaftaran Beasiswa</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">Masukkan Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autocomplete="off">
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Masukkan Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor HP</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester Saat Ini</label>
                        <select class="form-select" id="semester" name="semester" required>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}" {{ old('semester') == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="gpa" class="form-label">IPK terakhir</label>
                        <input type="text" class="form-control" id="gpa" name="gpa" value="{{ old('gpa') }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="scholarship_type" class="form-label">Pilihan Beasiswa</label>
                        <select class="form-select" id="scholarship_type" name="scholarship_type" required>
                            <option value="Akademik" {{ old('scholarship_type') == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                            <option value="Non-Akademik" {{ old('scholarship_type') == 'Non-Akademik' ? 'selected' : '' }}>Non-Akademik</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="document" class="form-label">Upload Berkas Syarat</label>
                        <input type="file" class="form-control" id="document" name="document">
                    </div>

                    <button type="submit" class="btn btn-primary" id="submitBtn">Daftar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const gpaValues = [3.4, 2.9];
            const randomGpa = gpaValues[Math.floor(Math.random() * gpaValues.length)];
            const gpaInput = document.getElementById('gpa');
            gpaInput.value = randomGpa;

            const scholarshipSelect = document.getElementById('scholarship_type');
            const documentInput = document.getElementById('document');
            const submitBtn = document.getElementById('submitBtn');

            if (randomGpa < 3.0) {
                scholarshipSelect.disabled = true;
                documentInput.disabled = true;
                submitBtn.disabled = true;
            }
        });
    </script>
@endsection
