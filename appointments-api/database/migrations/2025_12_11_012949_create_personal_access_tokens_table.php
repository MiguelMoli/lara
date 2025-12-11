<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migración para crear la tabla personal_access_tokens.
 * Esta tabla almacena los tokens de acceso utilizados por el sistema
 * de autenticación personal de Laravel (Laravel Sanctum).
 */

return new class extends Migration
{
    // Crear tabla

    public function up(): void
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->text('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable()->index();
            $table->timestamps();
        });
    }

    // Eliminar tabla
    
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
