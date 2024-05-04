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

            $table->string('cantidad')->nullable();
            $table->string('sabor')->nullable();

            $table->foreignId('product_id')
            ->constrained('products');

            $table->foreignId('user_id')
            ->constrained('users');

            $table->boolean('pay')->default(false);

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
