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
            $table->foreignId('category_id')->constrained('categories')->cascadeOnUpdate()->cascadeOnDelete(); // Foreign Key Category
            $table->foreignId('tutor_id')->constrained('tutors')->cascadeOnUpdate()->cascadeOnDelete(); // Foreign Key Tutor
            $table->string('title'); // Judul kursus
            $table->string('subtitle')->nullable(); // Subjudul, bisa kosong
            $table->text('description')->nullable(); // Subjudul, bisa kosong
            $table->bigInteger('price')->nullable(); // Harga, bisa kosong

            $table->string('thumbnail')->nullable(); // Path gambar thumbnail
            $table->boolean('is_featured')->default(false); // Yang di tunjukkan ke halaman utama

            // Bakal Di Hapus

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
