<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('owner_phone')->nullable()->after('business_id');
            $table->string('website')->nullable()->after('owner_phone');
            $table->string('api_key', 64)->unique()->nullable()->after('password');
            $table->string('api_secret', 128)->nullable()->after('api_key');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['owner_phone', 'website', 'api_key', 'api_secret']);
        });
    }
};
