<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionMarcas extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('Marcas', function(Blueprint $tabla){
         $tabla->increments('MarcaId');
         $tabla->integer('ProveedorId')->unsigned();
         $tabla->string('Codigo')->unique();
         $tabla->string('Nombre')->unique();
         $tabla->foreign('ProveedorId')->references('ProveedorId')->on('Proveedores');
         $tabla->timestamps();
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('Marca');
  }
}
