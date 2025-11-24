<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapels = [
            ['nama' => 'Algoritma dan Pemrograman'],
            ['nama' => 'Dasar Pemrograman'],
            ['nama' => 'Pemrograman Berorientasi Objek'],
            ['nama' => 'Struktur Data'],
            ['nama' => 'Basis Data'],
            ['nama' => 'Jaringan Komputer'],
            ['nama' => 'Sistem Operasi'],
            ['nama' => 'Pemrograman Web'],
            ['nama' => 'Pemrograman Mobile'],
            ['nama' => 'Rekayasa Perangkat Lunak'],
            ['nama' => 'UI/UX Design'],
            ['nama' => 'Internet of Things (IoT)'],
            ['nama' => 'Keamanan Jaringan'],
            ['nama' => 'Cloud Computing'],
            ['nama' => 'Data Mining'],
        ];

        DB::table('mapels')->insert($mapels);
    }
}
