<?php

namespace Database\Seeders;

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

        /*$this->truncateTables([
            'bedrooms',
            'clients',
            'employees',
            'hotels',
            'reservations',
            'user_accounts'
        ]);*/

        
        $this->call(AccountSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(BedroomSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(ReservationSeeder::class);

    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREING_KEY_CHECKS = 0;');

        foreach($tables as $table){
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREING_KEY_CHECKS = 1;');
    }
}
