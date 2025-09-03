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
            $table->id('recipe_id');
            $table->unsignedBigInteger('user_id');
            $table->string('category');
            $table->string('recipe_name')->unique();
            $table->string('description');
            $table->string('m_ingred'); 
            $table->string('ingredients'); 
            $table->string('steps'); 
            $table->string('img'); 
            $table->string('cost'); 
            $table->string('holiday');
            $table->timestamps();
            // $table->softDeletes();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
        
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
