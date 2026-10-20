<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@palembang.go.id'],
            [
                'name' => 'Administrator Kecamatan AAL',
                'password' => bcrypt('admin123'),
            ]
        );

        \App\Models\Aspirasi::firstOrCreate(
            [
                'nik' => '1671012345670001',
                'telepon' => '081234567890',
            ],
            [
                'nama' => 'Bambang Sudirman',
                'kelurahan' => 'Alang-Alang Lebar',
                'kategori' => 'Infrastruktur & Jalan Rusak',
                'pesan' => 'Penerangan jalan umum di Jl. Kolonel H. Burlian dekat gapura lorong padam selama 3 hari.',
                'status' => 'Menunggu',
            ]
        );
    }
}
