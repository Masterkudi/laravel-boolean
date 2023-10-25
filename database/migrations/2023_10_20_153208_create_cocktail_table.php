<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

// Run the migrations.*/
  public function up(): void{Schema::create('cocktails', function (Blueprint $table) {$table->id();

            $table->string("nome", 100);
            $table->string("category", 100)->nullable();
            $table->json("ingredients")->nullable();
            $table->decimal('price', 8, 2)->default(0.00);
            $table->text('image');
            $table->timestamps();
        });
    }

    

// Reverse the migrations.
  public function down(){Schema::dropIfExists('cocktails');}
};