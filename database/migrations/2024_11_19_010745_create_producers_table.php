<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            //forgien key to album table. this line makes it so when a comment is deleted, all albums associated with that comment are deleted
            $table->foreignId('album_id')->constrained()->onDelete('cascade');
            $table->text('name');
            $table->text('genre');
            $table->text('label');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
