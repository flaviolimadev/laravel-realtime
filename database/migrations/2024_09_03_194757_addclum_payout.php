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
        Schema::table('ativos', function (Blueprint $table) {
            //
            $table->integer('payout_buy')->default(0);
            $table->integer('payout_sell')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ativos', function (Blueprint $table) {
            //
            $table->dropColumn('payout_buy');
            $table->dropColumn('payout_sell');
        });
    }
};
