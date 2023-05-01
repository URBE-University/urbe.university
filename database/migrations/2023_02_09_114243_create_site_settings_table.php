<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('keywords')->nullable();
            $table->string('favicon')->nullable();
            $table->string('card_image')->nullable();
            $table->string('canonical_url')->nullable();
            // Social media
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('tiktok_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('linkedin_url')->nullable();
            // Webmaster tools
            $table->string('google_search_id')->nullable();
            $table->string('bing_webmaster_id')->nullable();
            $table->string('yandex_webmaster_id')->nullable();
            // Instant indexing
            $table->string('instant_index_key')->nullable();
            $table->timestamps();
        });

        // Create site
        DB::table('site_settings')->insert(
            array(
                'title' => config('app.name'),
                'canonical_url' => config('app.url'),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
};
