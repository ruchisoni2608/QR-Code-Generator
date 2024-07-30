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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('website')->nullable();
            $table->string('position')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->unique();
            $table->string('workphone')->nullable();
            $table->string('mobilephone')->nullable();
            $table->string('privatephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->text('additionalInfo')->nullable();
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('slug')->unique();
            $table->string('selected_template');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
