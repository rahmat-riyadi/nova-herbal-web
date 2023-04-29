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
        $medicine = DB::table('nano_old_db.list')->get();

        $additional = DB::table('nano_old_db.list')->where('id', '>', 8825)->distinct('id')->get();

        $additional = DB::table('nano_old_db.list')->select(['id'])->distinct()->get(['NAMA', 'alamat', 'id']);

        // dd($additional);

        $id = [];
        $name = [];


        foreach( $patients as $i => $patient ){

            $id[] = $patient->id;
            $name[] = $patient->nama;

            Patients::create([
                'id' => $patient->id,
                'name' => $patient->nama,
                'id_patient' => $patient->id,
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

        // dd($id);

        foreach( $additional as $i => $patient ){

            $insert = true;

            foreach($id as $x){
                if($id == 1228)
                    print_r('exist');
                if($x == $patient->id){
                    $insert = false;
                    // print_r($patient->id);
                    // print_r('----');
                    // print_r($patient->NAMA);
                }
            }

            if($insert == true){
                // print_r();
                Patients::create([
                    'id' => $patient->id,
                    'name' => $patient->NAMA ?? '',
                    'id_patient' => $patient->id,
                    // 'phone' => $patient->hp,
                    // 'job' => $patient->pekerjaan,
                    // 'age' => $patient->usia,
                    'address' => $patient->alamat ?? ''
                ]);
            }



        }

        $patients = DB::connection('old_connect')->table('patients')->get();

        foreach( $patients as $i => $patient ){

            $insert = true;

            foreach($name as $n){
                if($patient->name == $n){
                    $insert = false;
                    break;
                }
            }

            if($insert == true){
                Patients::create([
                    'name' => $patient->name,
                    'id_patient' => $patient->id,
                    'phone' => $patient->phone,
                    'job' => $patient->job,
                    'age' => $patient->age,
                    'address' => $patient->address
                ]);
            }


            
            // if($patient->diagnosa){

            //     Disease::create([
            //         'disease' => $patient->diagnosa,
            //         'notes' => '-',
            //         'name' => $patient->nama
            //     ]);

            // }

        }

        
        foreach( $medicine as $item ){

            History::create([
                'patients_id' => $item->id,
                'name' => $item->NAMA,
                'medicine' => $item->KETERANGAN,
                'coming_time' => ($item->TGL == '') ? null : $item->TGL,
                'price' => 0,
                'status' =>'Selesai',
            ]);
            
        }

        $new_medicine = DB::connection('old_connect')->table('histories')->get();

        foreach( $new_medicine as $item ){

            print_r($item->name);

            History::create([
                'patients_id' => $item->patients_id,
                'name' => $item->name,
                'medicine' => $item->medicine,
                'coming_time' => $item->coming_time,
                'price' => $item->price,
                'status' =>'Selesai',
            ]);
            
        }

    }
}
