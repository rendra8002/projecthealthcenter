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
        Schema::create('tenagakerjas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Nama dokter
            $table->string('speciality')->nullable(); // Spesialisasi
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('photo')->nullable(); // Path foto
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenagakerjas');
    }
};