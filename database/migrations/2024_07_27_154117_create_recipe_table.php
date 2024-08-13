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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained();  
            //$table->foreignId('tag_id')->constrained();  
            //$table->string('college_name',25);
            $table->string('title',50);
            $table->string('ingredients');
            $table->string('recipe');
            $table->string('introduction');
            $table->timestamps();
            $table->double('vote_average');
            $table->string('image_path')->nullable(true);
            //$table->foreignId('recipe_id')->constrained()->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe');
    }
};
