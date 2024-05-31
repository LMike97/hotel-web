<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'user_id' => '3',
            'hotel_id' => '1',
            'first_name' => 'Alejandra',
            'second_name' => 'Elizabeth',
            'first_lastname' => 'Valencia',
            'second_lastname' => 'Gongora',
            'direction' => 'Calle Monte Alban #3312 Col. La Perdida',
            'position' => 'Contadora',
        ]);

        DB::table('employees')->insert([
            'user_id' => '4',
            'hotel_id' => '3',
            'first_name' => 'Jesus',
            'first_lastname' => 'Leon',
            'second_lastname' => 'Segovia',
            'direction' => 'Av. De la paz #55 Col. Americana',
            'position' => 'General',
        ]);
    }
}
