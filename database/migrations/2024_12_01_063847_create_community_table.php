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
        Schema::create('community', function (Blueprint $table) {
            $table->id('com_id');
            $table->unsignedBigInteger('user_id');
            $table->string('post'); 
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community');
        Schema::table('community', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
