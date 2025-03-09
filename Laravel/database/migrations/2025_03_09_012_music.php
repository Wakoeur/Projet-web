<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Music', function (Blueprint $table) {
            $table->id('Id_Music')->primary();
            $table->string('Name_Music', 50);
            $table->string('Type_Music', 20);
            $table->date('Date_Music')->nullable();
            $table->boolean('Feat');
            $table->foreignId('Id_Artist')->constrained('Artist')->references('Id_Artist');
            $table->foreignId('Id_Anime')->constrained('Anime')->references('Id_Anime');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Music');
    }
};
