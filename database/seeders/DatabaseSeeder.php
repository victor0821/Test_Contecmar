<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Proyecto;
use App\Models\Bloque;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tabla 3: Proyectos
    //Proyecto::create(['id' => 'BICM', 'nombre' => 'Oceanográfico']);
    //Proyecto::create(['id' => 'BALC', 'nombre' => 'Bloque DA']);
    // ... otros proyectos

    // Tabla 2: Bloques
    //Bloque::create(['id' => '130-1110', 'nombre_bloque' => '1110', 'proyecto_id' => 'BICM']);
    //Bloque::create(['id' => '135-1110', 'nombre_bloque' => '2210', 'proyecto_id' => 'BALC']);
    // ... otros bloques

    // Tabla 1: Usuarios
    User::create(['name' => 'victor', 'password' => 'vic']);
    //User::create(['name' => 'Gabriel', 'password' => '1111']);
    // ... otros usuarios
    }
}
