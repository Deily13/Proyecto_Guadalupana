<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolsa', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->string('image');
            $table->string('precio_total')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('Descripción')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bolsa');
    }
};
