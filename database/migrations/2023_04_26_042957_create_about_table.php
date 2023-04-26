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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('profile');
            $table->string('cv');
            $table->string('fullname');
            $table->integer('age');
            $table->string('degree');
            $table->string('interest');
            $table->string('phone');
            $table->string('email');
            $table->string('freelance');
            $table->string('imagefrom');
            $table->string('from');
            $table->string('imagecurrently');
            $table->string('currently');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
