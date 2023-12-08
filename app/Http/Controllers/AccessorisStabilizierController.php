<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAccessorisStabilizier;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AccessorisStabilizierController extends Controller
{
    public function index(): View
    {
        $dataAccessorisStabiliziers = DataAccessorisStabilizier::all();
        return view('as.index', compact('dataAccessorisStabiliziers'));
    }

    public function create(): View
    {
        return view('as.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'accessoris_stabilizier' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'status_ketersediaan'  => 'required',
        ]);
    

        $gambar = $request->file('gambar'); // Perbaikan nama field file gambar

        if ($gambar) {
            $gambarPath = $gambar->store('image_as', 'public'); 
            // Menyimpan gambar ke penyimpanan (storage)
            $validatedData['gambar'] = $gambarPath; 
        }

        DataAccessorisStabilizier::create($validatedData); // Menggunakan data yang telah divalidasi
        return redirect()->route('as.index')
             ->with('success', 'Data berhasil ditambahkan.');
    }
    public function edit($id): View
    {
        $dataAccessorisStabiliziers = DataAccessorisStabilizier::findOrFail($id); // Cari penyewa berdasarkan ID

        return view('as.edit', compact('dataAccessorisStabiliziers')); 
    }
    public function update(Request $request, $id): RedirectResponse
    {
    $validatedData = $request->validate([
        'accessoris_stabilizier' => 'required',
        'harga' => 'required',
        'gambar' => 'required',
        'tanggal_mulai' => 'required',
        'tanggal_berakhir' => 'required',
        'status_ketersediaan'  => 'required',
    ]);
    // Periksa apakah ada file gambar yang diunggah, jika ada, simpan gambar yang baru
    if ($request->hasFile('gambar')) {
        $validatedData['gambar'] = $request->file('gambar')->store('gambar', 'public');
    }

    $dataAccessorisStabiliziers = DataAccessorisStabilizier::findOrFail($id);
    $dataAccessorisStabiliziers->update($validatedData);

    return redirect()->route('as.index')
        ->with('success', 'Data berhasil diperbarui.');
    }
    public function destroy($id): RedirectResponse
    {
        $dataAccessorisStabiliziers = DataAccessorisStabilizier::findOrFail($id); 
        $dataAccessorisStabiliziers->delete();

        return redirect()->route('as.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}


