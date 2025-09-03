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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username')->unique();
            $table->string('fullname');
            $table->string('email')->unique(); // Ensure unique emails
            $table->integer('age');
            $table->string('img')->default('users/avatars/chef.png'); // Default image path
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('status')->default('active'); // Default value for status
            $table->softDeletes();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->default('active')->change();
            $table->string('img')->default('users/avatars/chef.png')->change();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');

        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        
    }
};
