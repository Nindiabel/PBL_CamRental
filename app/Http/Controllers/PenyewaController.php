<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa; // Import model Penyewa
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PenyewaController extends Controller
{
    public function index():View
    {
        $penyewas = Penyewa::all();

        return view('penyewa.index', compact('penyewas'));
    }

    public function getData()
    {
    $penyewas = Penyewa::all(); // Mengambil semua data penyewa (contoh saja)

    return response()->json($penyewas);
    }

    public function create(): View
    {
        // Menampilkan form untuk membuat penyewa baru
        return view('penyewa.create');
    }

    public function store(Request $request): RedirectResponse
    {
    $validatedData = $request->validate([
        'no' => 'required',
        'nama_penyewa' => 'required',
        'email' => 'nullable|email',
        'no_identitas' => 'required',
        'no_telepon' => 'nullable',

        
    ]);
    Penyewa::create($validatedData);
    
    return redirect()->route('penyewa.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id): View
    {
        $penyewa = Penyewa::findOrFail($id); // Cari penyewa berdasarkan ID

        return view('penyewa.edit', compact('penyewa')); // Tampilkan form untuk mengedit penyewa
    }

    public function update(Request $request, $id): RedirectResponse
    {
    $validatedData = $request->validate([
        'nama_penyewa' => 'required',
        'email' => 'nullable|email',
        'no_identitas' => 'required',
        'no_telepon' => 'nullable',
    ]);

    $penyewa = Penyewa::findOrFail($id);
    $penyewa->update($validatedData);

    return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil diperbarui');
    }


    public function destroy($id): RedirectResponse
    {
        $penyewa = Penyewa::findOrFail($id); // Cari penyewa berdasarkan ID
        $penyewa->delete(); // Hapus penyewa

        return redirect()->route('penyewa.index')
            ->with('success', 'Penyewa berhasil dihapus');
    }
}

