<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLensa;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class LensaController extends Controller
{
    public function index(): View
    {
        $dataLensas = DataLensa::all();
        return view('lensa.index', compact('dataLensas'));
    }

    public function create(): View
    {
        return view('lensa.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'lensa' => 'required',
            'harga_lensa' => 'required',
            'gambar_lensa' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'status_ketersediaan'  => 'required',
        ]);

        $gambar = $request->file('gambar_lensa'); // Perbaikan nama field file gambar

        if ($gambar) {
            $gambarPath = $gambar->store('image_lensa', 'public'); 
            // Menyimpan gambar ke penyimpanan (storage)
            $validatedData['gambar_lensa'] = $gambarPath; 
        }

        DataLensa::create($validatedData); // Menggunakan data yang telah divalidasi
        return redirect()->route('lensa.index')
             ->with('success', 'Lensa berhasil ditambahkan.');
    }
    public function edit($id): View
    {
        $dataLensa = DataLensa::findOrFail($id); // Cari penyewa berdasarkan ID

        return view('lensa.edit', compact('dataLensa')); 
    }
    public function update(Request $request, $id): RedirectResponse
    {
    $validatedData = $request->validate([
        'lensa' => 'required',
        'harga_lensa' => 'required',
        'gambar_lensa' => 'required',
        'tanggal_mulai' => 'required',
        'tanggal_berakhir' => 'required',
        'status_ketersediaan'  => 'required',
    ]);
    // Periksa apakah ada file gambar yang diunggah, jika ada, simpan gambar yang baru
    if ($request->hasFile('gambar_lensa')) {
        $validatedData['gambar_lensa'] = $request->file('gambar_lensa')->store('gambar', 'public');
    }

    $dataLensa = DataLensa::findOrFail($id);
    $dataLensa->update($validatedData);

    return redirect()->route('lensa.index')
        ->with('success', 'Lensa berhasil diperbarui.');
    }
    public function destroy($id): RedirectResponse
    {
        $dataLensa = DataLensa::findOrFail($id); 
        $dataLensa->delete();

        return redirect()->route('lensa.index')
            ->with('success', 'Lensa berhasil dihapus.');
    }
}


