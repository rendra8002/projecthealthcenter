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
        Schema::create('mediasocials', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();          // path foto
            $table->string('name_account')->nullable();               // nama akun
            $table->string('link')->nullable();                       // link akun
            $table->string('name_mediasocial')->nullable(); 
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediasocials');
    }
};
