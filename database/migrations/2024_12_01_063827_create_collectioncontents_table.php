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
        Schema::create('collectioncontents', function (Blueprint $table) {
            $table->id('collectcon_id'); //collection contents id
            $table->unsignedBigInteger('collect_id'); //collection id 
            $table->unsignedBigInteger('user_id'); // kay kinsa ang content
            $table->unsignedBigInteger('recipe_id'); //the recipe mismo
            $table->timestamps();

            $table->foreign('collect_id')->references('collect_id')->on('collections')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('recipe_id')->references('recipe_id')->on('recipes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collectioncontents');
    }
};
