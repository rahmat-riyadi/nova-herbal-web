<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Disease;
use App\Models\History;
use App\Models\Patients;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'), // password
        ]);

        User::create([
            'name' => 'super admin',
            'email' => 'superadmin@gmail.com',
            'role' => 'superadmin',
            'password' => bcrypt('password'), // password
        ]);

        $patients = DB::connection('old_connect')->table('data_pasien')->get();
        $medicine = DB::connection('old_connect')->table('list')->get();


        foreach( $patients as $i => $patient ){
            Patients::create([
                'name' => $patient->nama,
                'id_patient' => $i,
                'phone' => $patient->hp,
                'job' => $patient->pekerjaan,
                'age' => $patient->usia,
                'address' => $patient->alamat
            ]);

            
            if($patient->diagnosa){

                Disease::create([
                    'disease' => $patient->diagnosa,
                    'notes' => '-',
                    'name' => $patient->nama
                ]);

            }

        }

        
        foreach( $medicine as $item ){

            History::create([
                'patients_id' => $item->id,
                'medicine' => $item->KETERANGAN,
                'coming_time' => ($item->TGL == '') ? null : $item->TGL,
                'price' => 0,
                'status' =>'Selesai',
                'name' => $item->NAMA
            ]);
            
        }

    }
}
