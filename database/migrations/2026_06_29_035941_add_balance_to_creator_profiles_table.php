<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('creator_profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('balance_available')->default(0)->after('username');
            $table->unsignedBigInteger('balance_pending')->default(0)->after('balance_available');
        });
    }

    public function down(): void
    {
        Schema::table('creator_profiles', function (Blueprint $table) {
            $table->dropColumn(['balance_available', 'balance_pending']);
        });
    }
};
