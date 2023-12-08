<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKamera;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class KameraController extends Controller
{
    public function index(): View
    {
        $dataKameras = DataKamera::all();
        return view('kamera.index', compact('dataKameras'));
    }

    public function create(): View
    {
        return view('kamera.create');
    }

    public function store(Request $request): RedirectResponse
    {   
        $validatedData = $request->validate([
            'kamera' => 'required',
            'kelengkapan' => 'required',
            'harga_kamera' => 'required',
            'gambar_kamera' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'status_ketersediaan'  => 'required',
        ]);

        $gambar = $request->file('gambar_kamera'); // Perbaikan nama field file gambar

        if ($gambar) {
            $gambarPath = $gambar->store('image_kamera', 'public'); 
            // Menyimpan gambar ke penyimpanan (storage)
            $validatedData['gambar_kamera'] = $gambarPath; // Mengisi kolom gambar_kamera dengan path yang disimpan
        }

        DataKamera::create($validatedData); // Menggunakan data yang telah divalidasi
        return redirect()->route('kamera.index')
             ->with('success', 'Kamera berhasil ditambahkan.');
    }
    public function edit($id): View
    {
        $dataKamera = DataKamera::findOrFail($id); // Cari penyewa berdasarkan ID

        return view('kamera.edit', compact('dataKamera')); 
    }
    public function update(Request $request, $id): RedirectResponse
    {
    $validatedData = $request->validate([
        'kamera' => 'required',
        'kelengkapan' => 'required',
        'harga_kamera' => 'required',
        'gambar_kamera' => 'required',
        'tanggal_mulai' => 'required',
        'tanggal_berakhir' => 'required',
        'status_ketersediaan'  => 'required',
    ]);
    // Periksa apakah ada file gambar yang diunggah, jika ada, simpan gambar yang baru
    if ($request->hasFile('gambar_kamera')) {
        $validatedData['gambar_kamera'] = $request->file('gambar_kamera')->store('data_gambar', 'public');
    }

    $dataKamera = DataKamera::findOrFail($id);
    $dataKamera->update($validatedData);

    return redirect()->route('kamera.index')
        ->with('success', 'Kamera berhasil diperbarui.');
    }
    public function destroy($id): RedirectResponse
    {
        $dataKamera = DataKamera::findOrFail($id); 
        $dataKamera->delete();

        return redirect()->route('kamera.index')
            ->with('success', 'Kamera berhasil dihapus.');
    }
}


