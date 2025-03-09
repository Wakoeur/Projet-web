<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Account', function (Blueprint $table) {
            $table->id('Id_Account')->primary();
            $table->string('F_Name_Account', 50);
            $table->string('Alias_Account', 50)->nullable();
            $table->string('L_Name_Account', 50);
            $table->string('Email_Account', 50);
            $table->string('Password_Account', 50);
            $table->foreignId('Id_Rights')->constrained('Rights')->references('Id_Rights');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Account');
    }
};
