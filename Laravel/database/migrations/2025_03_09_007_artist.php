<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Artist', function (Blueprint $table) {
            $table->id('Id_Artist')->primary();
            $table->string('Name_Artist', 50);
            $table->boolean('Band');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Artist');
    }
};
