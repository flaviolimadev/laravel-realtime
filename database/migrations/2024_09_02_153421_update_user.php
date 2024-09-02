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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('user')->unique();
            $table->string('telephone')->nullable();
            $table->timestamp('telephone_verified_at')->nullable();
            $table->integer('status')->default(0);
            $table->bigInteger('balance')->default(0);
            $table->bigInteger('balance_fake')->default(1000000);
            $table->bigInteger('balance_block')->default(0);
            $table->integer('conta_type')->default(0);
            $table->string('code')->unique();
            $table->integer('tax_code')->unique();
            $table->date('birth_date')->nullable();
            $table->longText('avatar')->default('avatar.png');
            $table->integer('is_admin')->default(0);
            $table->integer('login_checked')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('user');
            $table->dropColumn('telephone');
            $table->dropColumn('telephone_verified_at');
            $table->dropColumn('status');
            $table->dropColumn('balance');
            $table->dropColumn('balance_fake');
            $table->dropColumn('balance_block');
            $table->dropColumn('conta_type');
            $table->dropColumn('code');
            $table->dropColumn('tax_code');
            $table->dropColumn('birth_date');
            $table->dropColumn('avatar');
            $table->dropColumn('is_admin');
            $table->dropColumn('login_checked');
        });
    }
};
