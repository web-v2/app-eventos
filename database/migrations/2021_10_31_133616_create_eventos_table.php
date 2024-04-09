<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigInteger('idEvento')->primaryKey()->autoIncrement()->unsigned();
            $table->biginteger('tipo_ev_id')->unsigned();
            $table->foreign('tipo_ev_id')->references('id')->on('tipos');
            $table->String('nombre_ev', 85);
            $table->date('fechaInicio');
            $table->time('horaInicio');
            $table->dateTime('fechaHoraInicio');
            $table->date('fechaFinal');
            $table->time('horaFinal');
            $table->dateTime('fechaHoraFinal');
            $table->String('todoDia', 5)->default('false');;
            $table->text('descripcion_ev')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
