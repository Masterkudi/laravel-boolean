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
        Schema::create('cocktail', function (Blueprint $table) {
            $table->id();

            $table->string("cocktail_name", 100);
            $table->string("category", 100);
            $table->json("ingredients")->nullable();
            $table->decimal("price", 4, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktail');
    }
};
