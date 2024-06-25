<?php

use App\Models\Cinema;
use App\Models\Film;
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
        Schema::create('cinema_film', function (Blueprint $table) {
            $table->id();
            //relation avec cinema 
            //$table->foreignIdFor(Cinema::class)->constrained();
            //relation avec film
            //$table->foreignIdFor(Film::class)->constrained();
            $table->foreignIdFor(Cinema::class)->constrained()->onDelete('cascade');
            // Relation with film
            $table->foreignIdFor(Film::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinema_film');
    }
};
