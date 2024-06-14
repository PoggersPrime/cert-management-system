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
        Schema::create('intake_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('intake_details');
    }
};
