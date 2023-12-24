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
        Schema::create('comments_message', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->foreignId('sender_id')->refrences('id')->on('users');
            $table->foreignId('receiver_id')->refrences('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_message'); //
    }
};
