<?php

use App\Models\Salle;
use App\Models\Siege;
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
        Schema::create('siege_salle', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Siege::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Salle::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siege_salle');
    }
};
