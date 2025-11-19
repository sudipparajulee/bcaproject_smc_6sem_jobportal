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
            $table->string('role')->default('user'); //user, company, admin
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('skills')->nullable();
            $table->string('status')->nullable(); //active, inactive, pending
            $table->string('profile_picture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'address', 'phone', 'skills', 'status', 'profile_picture']);
        });
    }
};
