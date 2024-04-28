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
        Schema::create('followed_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->comment('Používateľ, ktorý followuje');
            $table->foreignId('followed_user_id')->comment('Používateľ, ktorý je followovaný');

            $table->unique(['user_id', 'followed_user_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followed_users');
    }
};
