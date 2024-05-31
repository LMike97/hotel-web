<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'user_id' => '2',
            'first_name' => 'Sebastian',
            'first_lastname' => 'Gonzalez',
            'second_lastname' => 'Cabrales',
            'no_reservation' => '3',
            'discount' => '15',
        ]);

        DB::table('clients')->insert([
            'user_id' => '5',
            'first_name' => 'Carlos',
            'second_name' => 'Miguel',
            'first_lastname' => 'Masias',
            'second_lastname' => 'Roque',
            'no_reservation' => '1',
            'discount' => '0',
        ]);

        DB::table('clients')->insert([
            'user_id' => '6',
            'first_name' => 'Pedro',
            'first_lastname' => 'Gallardo',
            'second_lastname' => 'Fernandez',
            'no_reservation' => '0',
            'discount' => '0',
        ]);
    }
}
