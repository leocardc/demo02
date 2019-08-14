<?php

use App\Role; // recuerde importar la clase relacionada con la siembra
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

      public function run() {

          Role::truncate(); // evite duplicidades eliminando datos previos

       Role::create([
           'nombre' => "Administrador",
           'descripcion' => "Acceso a todas las opciones",
       ]);

       Role::create([
           'nombre' => "Moderador",
           'descripcion' => "Sin acceso a usuarios",
       ]);

       Role::create([
           'nombre' => "Editor",
           'descripcion' => "Opciones limitadas de edición",
       ]);

       }
}
