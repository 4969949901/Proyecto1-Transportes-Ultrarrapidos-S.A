<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create("pilotos",function (Blueprint $table){

            $table->id();
            $table->unsignedBigInteger("id_transportistas");
            $table->foreign("id_transportistas")->references("id")->on("transportistas");
            $table->unsignedBigInteger("id_camions");
            $table->foreign("id_camions")->references("id")->on("camions");
            $table->unsignedBigInteger("id_predios");
            $table->foreign("id_predios")->references("id")->on("predios");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("numero_Dpi")->unique();
            $table->string("numero_Licencia")->unique();
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
        Schema::dropIfExists('pilotos');
    }
}
