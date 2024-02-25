<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'rol' => 'Administrador'
            ],
            [
                'rol' => 'Entrenador'
            ],
            [
                'rol' => 'Usuario'
            ]
        ];

        foreach ($roles as $rol) {
            Rol::create($rol);
        }
    }
}
