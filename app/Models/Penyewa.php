<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'nama_penyewa',
        'email',
        'no_identitas',
        'no_telepon', 
    ];
    
    protected $table = 'penyewas'; // Jika nama tabel tidak mengikuti konvensi Laravel (penyewa -> penyewas)

    public $timestamps = true; // Set true jika ingin menggunakan timestamps, false jika tidak
}

