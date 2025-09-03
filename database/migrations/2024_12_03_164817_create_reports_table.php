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
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->foreignId('reported_user_id')->constrained('users', 'user_id')->onDelete('cascade'); // The user being reported
            $table->string('reported_user_username')->constrained('users', 'username')->onDelete('cascade'); // The user's usernam being reported
            $table->foreignId('reporter_user_id')->constrained('users', 'user_id')->onDelete('cascade'); // The user who reported
            $table->string('reason');
            $table->text('custom_reason')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
