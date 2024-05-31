<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->user_name = 'LMike97';
        $user->email = 'miguel@hotmail.com';
        $user->password = Hash::make('123456');
        $user->telephone = '0013860006';
        $user->user_image = '1625509141.jpeg';
        $user->type = 'Admin';
        $user->name = 'Miguel';
        $user->lastname = 'Correa';
        $user->roles()->attach(Role::where('name', 'Admin')->first());
        $user->save();

        $user = new User();
        $user->user_name = 'Sebastian_86';
        $user->email = 's7_tian@gmail.com';
        $user->password = Hash::make('s3b4st1an');
        $user->telephone = '0073860008';
        $user->user_image = '1625508467.jpeg';
        $user->type = 'Client';
        $user->name = 'Sebastian';
        $user->lastname = 'González';
        $user->roles()->attach(Role::where('name', 'Client')->first());
        $user->save();

        $user = new User();
        $user->user_name = 'Bambina';
        $user->email = 'ale_vgg85@outlook.com';
        $user->password = Hash::make('b4mbina7');
        $user->telephone = '0011550008';
        $user->user_image = 'default_user_image.png';
        $user->type = 'Employee';
        $user->name = 'Alejandra';
        $user->lastname = 'Valencia';
        $user->roles()->attach(Role::where('name', 'Employee')->first());
        $user->save();

        $user = new User();
        $user->user_name = 'Yisus96';
        $user->email = 'chuy.mtz.5545@yahoo.com';
        $user->password = Hash::make('lt0nt0');
        $user->telephone = '0045509002';
        $user->user_image = '1625517795.jpg';
        $user->type = 'Employee';
        $user->name = 'Jesus';
        $user->lastname = 'Leon';
        $user->roles()->attach(Role::where('name', 'Employee')->first());
        $user->save();

        $user = new User();
        $user->user_name = 'Charly-Consejal';
        $user->email = 'carlos_masiasr@gmail.com';
        $user->password = Hash::make('charlang4s');
        $user->telephone = '5510254413';
        $user->user_image = 'default_user_image.png';
        $user->type = 'Client';
        $user->name = 'Carlos';
        $user->lastname = 'Masias';
        $user->roles()->attach(Role::where('name', 'Client')->first());
        $user->save();

        $user = new User();
        $user->user_name = 'PepesZ';
        $user->email = 'ysus-globos@hotmail.com';
        $user->password = Hash::make('d0np3p3');
        $user->telephone = '0180022220';
        $user->user_image = 'default_user_image.png';
        $user->type = 'Client';
        $user->name = 'Pedro';
        $user->lastname = 'Gallardo';
        $user->roles()->attach(Role::where('name', 'Client')->first());
        $user->save();

    }
}
