<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('idventa');
            $table->unsignedBigInteger('idhelados');
            $table->integer('cantidad');
            $table->double('precio');
            $table->string('unidad');
            $table->double('subtotal');
            $table->foreign('idhelados')->references('idhelados')->on('helados');
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
        Schema::dropIfExists('ventas');
    }
}
