<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Admin';
        $role->description = 'Administrator del sitio web, con todos los permisos';
        $role->save();
        $role = new Role();
        $role->name = 'Employee';
        $role->description = 'Empleado del sitio, con privilegios administrativos delimitados';
        $role->save();
        $role = new Role();
        $role->name = 'Client';
        $role->description = 'Cliente registrado en el sitio web';
        $role->save();
    }
}
