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
        Schema::create('register_service', function (Blueprint $table) {
            $table->foreignId('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreignId('register_id')->references('id')->on('registers')->onDelete('cascade');

            $table->unique(['service_id', 'register_id'], 'claves_ajenas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_service');
    }
};
