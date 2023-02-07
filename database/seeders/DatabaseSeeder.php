<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\History;
use App\Models\Patients;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Patients::create([
            'name' => 'Daeng Sumbul',
            'id_patient' => 'A-213',
            'nik' => '60200120116',
            'phone' => '087817020249',
            'address' => 'Jln. Amirullah No 13',
            'gender' => 'Laki - Laki',
            'note' => 'catatan',
        ]);

        Patients::create([
            'name' => 'Andi Becce',
            'id_patient' => 'A-2',
            'nik' => '60200120116',
            'phone' => '087817020249',
            'address' => 'Jln. Amirullah No 13',
            'gender' => 'Laki - Laki',
            'note' => 'catatan',
        ]);

        Patients::create([
            'name' => 'Andi Becce 3',
            'id_patient' => 'A-2',
            'nik' => '60200120116',
            'phone' => '087817020249',
            'address' => 'Jln. Amirullah No 13',
            'gender' => 'Laki - Laki',
            'note' => 'catatan',
        ]);

        // Patients::factory(10)->create();

        // History::factory(50)->create();

        History::create([
            'patients_id' => '1',
            'coming_time' => Carbon::now(),
            'medicine' => 'obat 1',
            'capsul_color' => 'merah',
            'status' => 'Selesai',
            'price' => 4200000,
        ]);

        History::create([
            'patients_id' => '2',
            'coming_time' => Carbon::now(),
            'medicine' => 'obat 2',
            'capsul_color' => 'ungu',
            'status' => 'Menunggu',
            'price' => 520000,
        ]);

        History::create([
            'patients_id' => '3',
            'coming_time' => Carbon::now(),
            'medicine' => 'obat 2',
            'capsul_color' => 'ungu',
            'status' => 'Menunggu',
            'price' => 520000,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
