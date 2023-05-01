<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // author
            $table->string('title');
            $table->string('slug');
            $table->longText('excerpt')->nullable();
            $table->longText('content');
            $table->text('featured_image')->nullable();
            $table->text('featured_image_alt_text')->nullable();
            $table->text('keywords')->nullable();
            $table->longText('keyphrases')->nullable();
            $table->boolean('enable_comments')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
