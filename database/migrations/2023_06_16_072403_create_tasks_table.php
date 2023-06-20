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
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('description');
            $table->date('due_date');
            $table->foreignuuid('priority_id')->references('id')->on('priorities')->nullable();
            $table->foreignuuid('user_id')->references('id')->on('users')->nullable();
            $table->foreignuuid('team_id')->references('id')->on('teams')->nullable();
            $table->foreignuuid('status_id')->references('id')->on('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
