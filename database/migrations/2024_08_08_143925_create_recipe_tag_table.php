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
        Schema::create('recipe_tag', function (Blueprint $table) {
            $table->foreignId('recipe_id')->constrained('recipes');
            $table->foreignId('tag_id')->constrained('tags');
            $table->primary(['recipe_id','tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_tag');
    }
};
