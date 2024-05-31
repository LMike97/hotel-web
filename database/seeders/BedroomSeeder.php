<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bedrooms')->insert([
            'hotel_id' => '1',
            'type' => 'Habitacion Individual',
            'description' => '1 cama King size,
            38 m²,
            Aire acondicionado,
            Baño privado,
            TV de pantalla plana,
            WiFi con cargo',
            'additional' => '38 m ², aire acondicionado, cancelación gratis, habitación para no fumadores.',
            'capacity' => '3',
            'price' => '1446',
            'available' => '25',
            'status' => 'Disponible',
        ]);

        DB::table('bedrooms')->insert([
            'hotel_id' => '1',
            'type' => 'Habitacion Doble',
            'description' => '2 camas doble,
            38 m²,
            Aire acondicionado,
            Baño privado,
            TV de pantalla plana,
            WiFi gratis',
            'additional' => '38 m ², aire acondicionado, cancelación gratis, habitación para no fumadores.',
            'capacity' => '3',
            'price' => '1446',
            'available' => '20',
            'status' => 'Disponible',
        ]);

        DB::table('bedrooms')->insert([
            'hotel_id' => '3',
            'type' => 'Habitacion Superior',
            'description' => '1 Cama doble extragrande,
            32 m²,
            Aire acondicionado,
            Baño privado,
            Insonorización,
            TV de pantalla plana,
            Cafetera,
            Minibar,
            WiFi gratis',
            'additional' => '32 m ², aire acondicionado, caja fuerte, plancha para ropa, escritorio, secadora de cabello, kit de amenities.',
            'capacity' => '2',
            'price' => '1275.68',
            'available' => '30',
            'status' => 'Disponible',
        ]);
    }
}
