<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataLensa extends Model
{
    protected $table = 'data_lensas';
    protected $fillable = [
        'id_lensa',
        'lensa',
        'harga_lensa',
        'gambar_lensa',
        'tanggal_mulai',
        'tanggal_berakhir',
        'status_ketersediaan'
    ];

    public function getStatusKetersediaanAttribute($value)
    {
        $statusKetersediaan = [
            1 => 'tersedia',
            0 => 'tidak tersedia',
        ];

        return isset($statusKetersediaan[$value]) ? $statusKetersediaan[$value] : null;
    }

    // Method mutator untuk mengonversi nilai string menjadi nilai integer
    public function setStatusKetersediaanAttribute($value)
    {
        $statusKetersediaan = [
            'tersedia' => 1,
            'tidak tersedia' => 0,
        ];

        $this->attributes['status_ketersediaan'] = isset($statusKetersediaan[$value]) ? $statusKetersediaan[$value] : null;
    }
}




