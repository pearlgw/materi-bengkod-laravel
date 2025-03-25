<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasiens = [
            [
                'nama' => 'Kenny Loggins',
                'alamat' => 'Jl. Contoh No. 123',
                'no_hp' => '081234567890',
                'email' => 'kennyloggins@gmail.com',
                'password' => Hash::make('kennyloggins@gmail.com'),
                'role' => 'pasien',
            ],
            [
                'nama' => 'Peter Parker',
                'alamat' => 'Jl. Contoh No. 456',
                'no_hp' => '081234567891',
                'email' => 'peterparker@gmail.com',
                'password' => Hash::make('peterparker@gmail.com'),
                'role' => 'pasien',
            ],
        ];

        foreach ($pasiens as $pasien) {
            $existingPasien = User::where('email', $pasien['email'])->first();

            if (!$existingPasien) {
                User::create($pasien);
                $this->command->info('Akun pasien ' . $pasien['nama'] . ' berhasil dibuat!');
            } else {
                $this->command->info('Akun pasien ' . $pasien['nama'] . ' sudah ada.');
            }
        }
    }
}
