<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'name' => 'The Westin Guadalajara',
            'description' => 'El The Westin Guadalajara es un moderno hotel situado frente al centro de convenciones de Expo Guadalajara. Las habitaciones del The Westin Guadalajara cuentan con los siguientes servicios: masajes, teléfono, cafetera y tetera, agua mineral gratuita, caja fuerte, ropa de cama hipoalergénica, aire acondicionado, minibar, limpieza diaria, baño privado, secador de cabello, ducha efecto lluvia y servicio de habitaciones.',
            'additional' => 'Wifi en el lobby,
            Wifi (habitación),
            Alberca,
            Spa,
            Estacionamiento,
            Mascotas permitidas',
            'direction' => 'Avenida de Las Rosas 2911, Guadalajara, 44530, JAL, México',
            'no_telephone' => '33-3880-2700',
        ]);

        DB::table('hotels')->insert([
            'name' => 'Hotel Safi Valle - Monterrey',
            'description' => 'Destacado por su imponente torre, el Hotel Safi Valle ofrece un elegante alojamiento de 5 estrellas en una prestigiosa zona de Monterrey. Sus habitaciones incluyen aire acondicionado, televisor con canales por cable, utensilios de planchado, reloj despertador y baño privado con secador de cabello y amenities. Además, algunas ofrecen adicionalmente salón, sofá cama y bañera de hidromasaje, así como minibar y terraza con vistas panorámicas.',
            'additional' => 'Wifi en el lobby,
            Wifi (habitación),
            Alberca,
            Spa,
            Estacionamiento,
            Restaurante,
            Bar en el hotel,
            Gym',
            'direction' => 'Av. Diego Rivera 555, Valle Oriente, 66260 San Pedro Garza García, N.L.',
            'no_telephone' => '81-8100-7000',
        ]);

        DB::table('hotels')->insert([
            'name' => 'Nh Collection Mexico City',
            'description' => 'El hotel NH Collection Mexico City Santa Fe de 4 estrellas y con su elegante fachada, destaca como un faro de lujo contemporáneo en el corazón del distrito financiero más nuevo de la ciudad de México, y, a través de sus acogedoras puertas, recibe tanto a los viajeros de negocios como a los turistas.',
            'additional' => 'Wifi en el lobby,
            Wifi (habitación),
            Estacionamiento,
            Mascotas permitidas,
            Restaurante,
            Bar en el hotel,
            Terraza,
            Gym',
            'direction' => 'Juan Salvador Agraz 44, Lomas de Santa Fe, Contadero, Cuajimalpa de Morelos, 05109, CDMX',
            'no_telephone' => '55-9596-8214',
        ]);
    }
}
