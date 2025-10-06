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
        Schema::create('posteos', function (Blueprint $table) {
            $table->post_id(); //Primary Key
            $table->string('author'); // Autor del posteo
            $table->string('title'); // Título del posteo
            $table->string('summary'); // Resumen del posteo
            $table->string('content'); // Contenido del posteo
            $table->json('tags')->nullable(); // Etiquetas del posteo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posteos');
    }
};
