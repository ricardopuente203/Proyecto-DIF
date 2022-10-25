<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreCompleto');
            $table->string('FechaNacimiento');
            $table->string('Domicilio');
            $table->string('ProgramaBeneficiado');
            $table->string('NumeroTelefono');
            $table->string('FechaAceptacion');
            $table->string('Curp');
            $table->string('CredencialLector');
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
        Schema::dropIfExists('beneficiarios');
    }
}
