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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // ID utama
            $table->foreignId('category_id')->constrained('category')->cascadeOnUpdate()->cascadeOnDelete(); // Foreign Key Category
            $table->string('title'); // Judul kursus
            $table->string('subtitle')->nullable(); // Subjudul, bisa kosong
            $table->string('teacher')->nullable(); // Nama pengajar
            $table->integer('students')->default(0); // Jumlah siswa, default 0
            $table->integer('videos')->default(0); // Jumlah video, default 0
            $table->string('thumbnail')->nullable(); // Path gambar thumbnail
            $table->timestamps(); // created_at & updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
