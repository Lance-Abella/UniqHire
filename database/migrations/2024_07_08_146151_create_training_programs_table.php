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
        Schema::create('training_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('city');
            $table->integer('participants')->nullable();
            $table->date('start');
            $table->date('end');
            //requirements
            $table->foreignId('disability_id')->constrained('disabilities')->onDelete('cascade');
            $table->foreignId('education_id')->constrained('education_levels')->onDelete('cascade');
            // $table->foreignId('worktype_id')->constrained('work_types')->onDelete('cascade');
            // $table->foreignId('worksetup_id')->constrained('work_setups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_programs');
    }
};
