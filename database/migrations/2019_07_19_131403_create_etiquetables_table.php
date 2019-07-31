<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtiquetablesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('etiquetables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('etiqueta_id')->unsigned(); // ID de la etiqueta
            $table->integer('etiquetable_id')->unsigned(); // ID de la fila del modelo a etiquetar
            $table->string('etiquetable_type'); // el nombre del modelo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('etiquetables');
    }
}
