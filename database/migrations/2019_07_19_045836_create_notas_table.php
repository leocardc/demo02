<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('notas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('contenido');
            $table->integer('anotacion_id')->unsigned(); // ID al que se le agrega la anotación. Ej. (1)
            $table->string('anotacion_type'); // Relación en la que está dicho ID (App\Mensajes)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('notas');
    }
}
