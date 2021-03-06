<?php

namespace App\Listeners;

use App\Events\MensajeRecibido;
use Mail;

class EnviarRespuesta {
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MensajeRecibido  $event
     * @return void
     */
    public function handle(MensajeRecibido $event) {
        // dd($event->getMensaje()); // ver el objeto que llega como argumento
        // https://www.php.net/manual/es/functions.anonymous.php

        $mensaje = $event->getMensaje();
        Mail::send('emails.respuesta-contacto', ['msg' => $mensaje], function ($msg) use ($mensaje) {
            $msg->to($mensaje->email, $mensaje->nombre)->subject('Tu mensaje fue recibido');
        });
    }
}