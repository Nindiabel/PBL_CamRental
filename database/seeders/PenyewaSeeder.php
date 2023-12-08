<?php

namespace Database\Seeders;

use App\Models\Penyewa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penyewa::create([
            'no' => '01',
            'nama_penyewa' => 'welda',
            'email' => 'welda@gmail.com',
            'no_identitas' => 36225789078,
            'no_telepon' => '087683452342',
        ]);
    }
}
