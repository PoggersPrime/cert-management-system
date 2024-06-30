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
        Schema::create('intern_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('intern_id');
            $table->foreign('intern_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreignId('position_id');
            $table->foreign('position_id')->references('id')->on('intern_positions')->onDelete('cascade');
            $table->string('start_date');
            $table->string('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intern_details');
    }
};
