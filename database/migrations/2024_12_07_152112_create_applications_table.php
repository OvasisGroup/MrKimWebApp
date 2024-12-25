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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('posted_job_id'); // Foreign key to the jobs table
            $table->unsignedBigInteger('user_id'); // Foreign key to the users table
            $table->text('cover_letter')->nullable(); // Optional cover letter
            $table->enum('status', ['pending', 'reviewed', 'accepted', 'rejected'])->default('pending'); // Application status
            $table->timestamps();

            $table->foreign('posted_job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
