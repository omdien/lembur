<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Supel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Didin Handiman',
            'email' => 'omdien@gmail.com',
            'password' => bcrypt('4rfv5tgb'),
            'nip' => '197502102009121001'
        ]);

        User::create([
            'name' => 'Khaerun Naheru',
            'email' => 'khaerun.naheru@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '198701242003121001'
        ]);

        User::create([
            'name' => 'Imaduddin',
            'email' => 'imaduddin72@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '197201242003121001'
        ]);

        Supel::create([
            'sup_nomor' => 'B.614/SKIPM.MER/KP.440/IV/2023',
            'sup_keterangan' => '1.	Untuk melakukan  Lembur  Kegiatan Administrasi Keuangan, Pelaporan Kinerja dan kegiatan IT di Lingkup Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan Merak bulan Mei 2023'
        ]);


    }
}