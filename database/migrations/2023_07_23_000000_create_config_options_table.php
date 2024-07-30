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
        Schema::create('config_options', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->enum('type', ['external', 'internal'])->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=>Inactive, 1=>Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config_options');
    }
};
