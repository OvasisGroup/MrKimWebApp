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
        Schema::create('premium', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('maintitle', 1000); // Sub-category name
            $table->string('premium_header', 1000)->nullable(); // Path to the image, optional
            $table->string('image')->nullable(); // Path to the image, optional
            $table->text('body', 5000)->nullable(); // Sub-category description, optional
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premium');
    }
};
