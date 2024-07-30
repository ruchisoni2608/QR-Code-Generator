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
        Schema::create('v_card_social_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('social_media_link_id');
            $table->unsignedBigInteger('profile_id');
            $table->string('url');
            $table->timestamps();
            $table->foreign('social_media_link_id')->references('id')->on('social_media_links')->onDelete('cascade');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('v_card_social_links');
    }
};
