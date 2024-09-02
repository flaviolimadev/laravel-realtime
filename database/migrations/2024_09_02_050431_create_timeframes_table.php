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
        Schema::create('timeframes', function (Blueprint $table) {
            $table->id();
            $table->string('ativo');
            $table->string('open');
            $table->string('close');
            $table->string('high');
            $table->string('low');
            $table->string('vol');
            $table->string('timeframe')->default('M1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timeframes');
    }
};
