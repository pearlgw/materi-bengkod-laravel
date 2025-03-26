<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dokters = [
            [
                'nama' => 'Dr. John Doe',
                'alamat' => 'Jl. Contoh No. 123',
                'no_hp' => '081234567890',
                'email' => 'johndoe@gmail.com',
                'password' => Hash::make('johndoe@gmail.com'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Jane Smith',
                'alamat' => 'Jl. Contoh No. 456',
                'no_hp' => '081234567891',
                'email' => 'janesmith@gmail.com',
                'password' => Hash::make('janesmith@gmail.com'),
                'role' => 'dokter',
            ],
        ];

        foreach ($dokters as $dokter) {
            $existingDokter = User::where('email', $dokter['email'])->first();

            if (!$existingDokter) {
                User::create($dokter);
                $this->command->info('Akun dokter ' . $dokter['nama'] . ' berhasil dibuat!');
            } else {
                $this->command->info('Akun dokter ' . $dokter['nama'] . ' sudah ada.');
            }
        }
    }
}
