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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('intern_id')->nullable();
            $table->foreign('intern_id')->references('id')->on('intern_details')->onDelete('cascade');
            $table->foreignId('intake_id')->nullable();
            $table->foreign('intake_id')->references('id')->on('intake_details')->onDelete('cascade');
            $table->string('certificate_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
