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
        Schema::create('tuitions', function (Blueprint $table) {
            $table->id();
            $table->string('academic_year');
            $table->integer('undergrad_fulltime_ch'); // Full time credit hours
            $table->integer('undergrad_halftime_ch'); // Half time credit hours
            $table->integer('grad_fulltime_ch'); // Full time credit hours
            $table->integer('grad_halftime_ch'); // Full time credit hours
            $table->integer('undergrad_cost'); // Undergraduate cost in cents
            $table->integer('grad_cost'); // Undergraduate cost in cents
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuitions');
    }
};
