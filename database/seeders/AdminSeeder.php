<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar guru dengan tahun_masuk
        $gurus = [
            ["name" => "Mas'ah", "tahun_masuk" => "Wali Kelas 1A"],
            ["name" => "Indahyani Tawakkal", "tahun_masuk" => "Wali Kelas 1C"],
            ["name" => "Risky Inesa", "tahun_masuk" => "Wali Kelas 2C"],
            ["name" => "Mulyati", "tahun_masuk" => "Wali Kelas 3A"],
            ["name" => "Riska", "tahun_masuk" => "Wali Kelas 3C"],
            ["name" => "Muh. Musyawwir", "tahun_masuk" => "Wali Kelas 4B"],
            ["name" => "St. Nurhalisa", "tahun_masuk" => "Wali Kelas 5B"],
            ["name" => "Sri Sundari Rasyid", "tahun_masuk" => "Wali Kelas 6B"],
            ["name" => "Arifuddin", "tahun_masuk" => "PJOK (1-3)"],
            ["name" => "Savira D. Salsabella", "tahun_masuk" => "PJOK (3-6)"],
            ["name" => "Nur Fadilah Putri", "tahun_masuk" => "PAI (1-6)"],
        ];

        foreach ($gurus as $guru) {
            User::create([
                'name' => $guru['name'],
                'username' => strtolower(Str::slug($guru['name'])),
                'password' => bcrypt('user123'),
                'nim' => str_pad(random_int(1000000000, 9999999999), 10, '0', STR_PAD_LEFT),
                'tahun_masuk' => $guru['tahun_masuk'],
                'role' => 'user',
            ]);
            Admin::create([
                'name' => $guru['name'],
                'username' => strtolower(Str::slug($guru['name'])),
                'password' => bcrypt('user123'),
                'nim' => str_pad(random_int(1000000000, 9999999999), 10, '0', STR_PAD_LEFT),
                'tahun_masuk' => $guru['tahun_masuk'],
                'role' => 'user',
            ]);
        }

        // Akun khusus admin, kepala sekolah, dan guru umum
        $accounts = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'Kepala Sekolah',
                'username' => 'kepala',
                'password' => bcrypt('kepala'),
                'role' => 'admin',
            ],
            [
                'name' => 'mahasiswa',
                'username' => 'mahasiswa',
                'password' => bcrypt('mahasiswa'),
                'nim' => '1234567890',
                'role' => 'user',
            ],
        ];

        foreach ($accounts as $acc) {
            User::create([
                'name' => $acc['name'],
                'username' => $acc['username'],
                'password' => $acc['password'],
                'nim' => $acc['nim'] ?? null,
                'tahun_masuk' => $acc['tahun_masuk'] ?? null,
                'role' => $acc['role'],
            ]);
            Admin::create([
                'name' => $acc['name'],
                'username' => $acc['username'],
                'password' => $acc['password'],
                'nim' => $acc['nim'] ?? null,
                'tahun_masuk' => $acc['tahun_masuk'] ?? null,
                'role' => $acc['role'],
            ]);
        }
    }
}
