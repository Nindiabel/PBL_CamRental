<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataHarga extends Model
{
    protected $table = 'data_hargas';
    protected $fillable = [
        'id',
        'id_kamera',
        'id_lensa',
        'id_as',
        'id_paket',
        'harga',
        'tanggal_mulai',
        'tanggal_berakhir'
    ];
    public function dataKamera()
    {
        return $this->belongsTo(DataKamera::class, 'id_kamera', 'id_kamera');
    }
}




