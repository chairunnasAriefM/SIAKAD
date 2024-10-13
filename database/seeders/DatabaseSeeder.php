<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Jurusan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use App\Models\Prasyarat;
use App\Models\Matakuliah;
use App\Models\RuangKuliah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seed tabel Jurusan
        Jurusan::factory()->count(10)->create();

        // Seed tabel RuangKuliah
        RuangKuliah::factory()->count(5)->create();

        // Seed tabel Dosen
        Dosen::factory()->count(10)->create();

        // Seed tabel Prasyarat
        Prasyarat::factory()->count(10)->create();

        // Seed tabel Matakuliah
        Matakuliah::factory()->count(10)->create();

        // Seed tabel Mahasiswa
        Mahasiswa::factory()->count(10)->create();
    }
}
