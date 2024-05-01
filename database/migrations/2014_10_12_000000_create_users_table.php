<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de usuario
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('first_name'); // Nombre
            $table->string('last_name'); // Apellidos
            $table->string('identification_type'); // Tipo de Identificación
            $table->string('identification_number'); // Número de Identificación
            $table->string('phone_number'); // Número de Celular
            $table->string('address'); // Dirección
            $table->string('rol')->default('usuario'); // Rol por defecto
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
