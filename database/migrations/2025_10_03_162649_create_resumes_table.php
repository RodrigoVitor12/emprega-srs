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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('city')->nullable();

            $table->text('summary')->nullable();

            $table->string('course_type')->nullable(); // high_school, technical, college
            $table->string('institution')->nullable();
            $table->string('completion_status')->nullable(); // in_progress, completed

            // Experiência 1 (opcional)
            $table->string('experience_1_position')->nullable();
            $table->string('experience_1_company')->nullable();
            $table->string('experience_1_period')->nullable();
            $table->text('experience_1_activities')->nullable();

            // Experiência 2 (opcional)
            $table->string('experience_2_position')->nullable();
            $table->string('experience_2_company')->nullable();
            $table->string('experience_2_period')->nullable();
            $table->text('experience_2_activities')->nullable();

            // Habilidades e idiomas
            $table->text('skills')->nullable(); 
            $table->text('languages')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};