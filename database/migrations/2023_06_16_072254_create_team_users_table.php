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
        Schema::create('team_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignuuid('user_id')->references('id')->on('users')->nullable();
            $table->foreignuuid('team_id')->references('id')->on('teams')->nullable();
            $table->enum('role', ['admin', 'member'])->default('member');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_users');
    }
};
