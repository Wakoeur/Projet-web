<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Own', function (Blueprint $table) {
            $table->foreignId('Id_Studio')->constrained('Studio')->references('Id_Studio');
            $table->foreignId('Id_Artwork')->constrained('Artwork')->references('Id_Artwork');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Own');
    }
};
