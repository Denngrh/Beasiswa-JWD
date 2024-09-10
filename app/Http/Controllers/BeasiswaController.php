<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;
use Illuminate\Http\RedirectResponse;

class BeasiswaController extends Controller
{

    public function index()
    {
        $beasiswas = Beasiswa::all();
        return view('beasiswa.index', compact('beasiswas'));
    }
    public function create()
    {
        
        return view('beasiswa.create');
    }
    public function store(Request $request): RedirectResponse
{
    // Validasi data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'semester' => 'required|integer|between:1,8',
        'scholarship_type' => 'required|string',
        'gpa' => 'required|string',
        'document' => 'nullable|mimes:pdf,jpg,zip,png|max:2048',
    ]);

    // Cek jika email sudah ada di database
    if (Beasiswa::where('email', $request->input('email'))->exists()) {
        return redirect()->back()->withErrors([
            'email' => 'Email sudah digunakan. Silakan gunakan email lain.'
        ])->withInput();
    }
    // Simpan data
    $beasiswa = new Beasiswa();
    $beasiswa->name = $request->input('name');
    $beasiswa->email = $request->input('email');
    $beasiswa->phone = $request->input('phone');
    $beasiswa->semester = $request->input('semester');
    $beasiswa->gpa = $request->input('gpa');
    $beasiswa->scholarship_type = $request->input('scholarship_type');

    if ($request->hasFile('document')) {
        $fileName = time().'_'.$request->file('document')->hashName();
        $path = $request->file('document')->storeAs('documents', $fileName, 'public');
        $beasiswa->document = $path;
    } else {
        $beasiswa->document = null;
    }

    $beasiswa->status_ajuan = 'belum di verifikasi';
    $beasiswa->save();

    return redirect()->route('beasiswa.index')->with('success', 'Pendaftaran beasiswa berhasil.');
}

}

