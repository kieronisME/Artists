<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 // creates table in database
    public function up(): void
    {
        Schema::create('Artists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('rating');
            $table->integer('releaseYear');
            $table->string('image');
            $table->text('Song')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Artists');
    }
};
