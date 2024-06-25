<?php

use App\Models\Film;
use App\Models\review;
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
        Schema::create('review_film', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Review::class)->constrained()->onDelete('cascade');
            // Relation with film
            $table->foreignIdFor(Film::class)->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_film');
    }
};
