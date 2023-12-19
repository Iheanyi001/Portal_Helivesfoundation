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
        Schema::create('student_application', function(Blueprint $table){
            $table->id();
            $table->string('uni')->unique();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('age');
            $table->text('education');
            $table->text('occupation');
            $table->text('interest');
            $table->text('skills');
            $table->text('experience');
            $table->text('apply_skills');
            $table->text('ict_experience');
            $table->text('how_you_heard');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_application');
    }
};
