<?php

use Illuminate\Database\Seeder;
use App\Mensaje;
use App\User;
use Carbon\Carbon;

class MensajesTableSeeder extends Seeder
{
    private $usuarios;

    function __construct() {
        $this->usuarios = User::all();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensaje::truncate();

       for ($i = 1; $i <= 100; $i++) {
           $datosUsuario = $this->getUsuario(); // a veces asigna un usuario 
          
           $datosMensaje = [
               'asunto' => "Asunto del mensaje {$i}",
               'contenido' => "Contenido del mensaje {$i}",
           ];
           $datosMensaje['created_at'] = Carbon::now()->subMinutes(100 - $i);


           if ($datosUsuario) {
               $datosMensaje['user_id'] = $datosUsuario['id'];
               $datosMensaje['nombre'] = $datosUsuario['name'];
               $datosMensaje['email'] = $datosUsuario['email'];
           } else {
               $datosMensaje['nombre'] = "Visitante {$i}";
               $datosMensaje['email'] = "invitado{$i}@gmail.com";
           }

           $mensaje = Mensaje::create($datosMensaje);
       }

    }
    private function getUsuario() {
        $limite = $this->usuarios->count() - 1;
        $i = rand(0, $limite);
 
        if ($i) {
            return $this->usuarios->find($i)->getAttributes();
        }
        return $i;
    }
 
}
