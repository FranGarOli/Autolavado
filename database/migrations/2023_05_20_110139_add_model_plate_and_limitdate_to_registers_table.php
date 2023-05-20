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
        Schema::table('registers', function (Blueprint $table) {
            $table->string('plate', 64)->after('created_at');
            $table->string('model', 64)->after('plate');
            $table->timestamp('entryDate')->nullable();
            $table->timestamp('limitDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registers', function (Blueprint $table) {
            $table->dropColumn('model');
            $table->dropColumn('plate');
            $table->dropColumn('entryDate');
            $table->dropColumn('limitDate');
        });
    }
};
