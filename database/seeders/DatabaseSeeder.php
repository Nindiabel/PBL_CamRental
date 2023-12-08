<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        user::create([
            'username' => 'ujicoba',
            'password' => 'ujicoba',
            'email' => 'ujicoba@gmail.com',
        ]);
        $this->call([
            PenyewaSeeder::class,
         ]);
    }
}
