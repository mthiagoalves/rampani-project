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
        Schema::create('homepage_content', function (Blueprint $table) {
            $table->id();
            $table->text('initialPhrase', 200);
            $table->text('julianaPhrase', 200);
            $table->text('address');
            $table->text('email');
            $table->text('phone');
            $table->text('openingHours');
            $table->text('instagram');
            $table->text('facebook');
            $table->text('tiktok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_content');
    }
};
