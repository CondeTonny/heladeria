<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helados', function (Blueprint $table) {
            $table->id('idhelados');
            $table->unsignedBigInteger('idingredientes');
            $table->string('nombre');
            $table->integer('cantidad');
            $table->double('precio');
            $table->integer('stock');
            $table->foreign('idingredientes')->references('idingredientes')->on('ingredientes');
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
        Schema::dropIfExists('helados');
    }
}
