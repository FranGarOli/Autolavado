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
        Schema::table('services', function (Blueprint $table) {
            $table->string('title', 64)->after('id');
            $table->enum('category', ['Limpieza de tapiceria', 'Limpieza interior', 'Limpieza exterior', 'Limpieza de motor', 'Limpieza completa', 'Pulida', 'Desinfeccion', 'Productos', 'Oferta']);
            $table->boolean('visible')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('category');
            $table->dropColumn('visible');
        });
    }
};
