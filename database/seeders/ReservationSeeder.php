<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'bedroom_id'=>'1',
            'client_id'=>'2',
            'guest_name'=>'Carlos Miguel Masias Roque',
            'initial_date'=>'2021-07-01',
            'final_date'=>'2021-07-02',
            'number_bedrooms'=>'1',
            'Telephone' => '5510254413',
            'email' => 'carlos_masiasr@gmail.com',
            'special_petition'=>'Quisiera 2 mujeres de compañia :3',
            'total_price'=>'1446',
            'status'=>'Process',
        ]);
    }
}
