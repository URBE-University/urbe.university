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
        Schema::create('site_indices', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_indexed')->default(false);
            $table->string('url');
            $table->integer('google_response_code')->nullable();
            $table->integer('bing_response_code')->nullable();
            $table->integer('yandex_response_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_indices');
    }
};
