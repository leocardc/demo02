<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    private $combinacionRoles;
    private $password;

    function __construct() {

        $this->combinacionRoles = [
            1,
            2,
            3,
            [1, 2],
            [1, 3],
            [2, 3],
            [1, 2, 3],
        ];

        $this->password = '123';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        // $this->crearUsuarioCarlosCuesta();

        for ($i = 1; $i <= 10; $i++) {
            $tmp = sprintf("%'.04d\n", $i);

            $usuario = User::create([
                "name" => "Usuario de prueba {$i}",
                "email" => "usuario{$i}@gmail.com",
                "address" => "Calle {$i} #{$i}-{$i}",
                "phone" => "321 123 {$tmp}",
                "password" => $this->password
            ]);

            $usuario->roles()->attach($this->definirRoles());
        }

    }

    
    /**
     * Retorna una combinación aleatoria de roles, siendo:
     * 1-Administrador, 2-Moderador, 3-Editor
     */
    private function definirRoles() {
        $i = rand(0, 6);
        return $this->combinacionRoles[$i];
    }

    // private function crearUsuarioCarlosCuesta() {
    //     // crear siempre este usuario
    //     $usuario = User::create([
    //         "name" => "Carlos Cuesta Iglesias",
    //         "email" => "cc@gmail.com",
    //         "address" => "Calle 65 #26-10",
    //         "phone" => "321 123 0000",
    //         "password" => $this->password
    //     ]);

    //     $usuario->roles()->attach([1, 3]);
    // }

}
