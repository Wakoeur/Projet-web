<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Character', function (Blueprint $table) {
            $table->id('Id_Character')->primary();
            $table->string('F_Name_Character', 50);
            $table->string('Alias_Character', 30)->nullable();
            $table->string('S_Name_Character', 50)->nullable();
            $table->string('L_Name_Character', 50)->nullable();
            $table->string('Role_Character', 30);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Character');
    }
};
