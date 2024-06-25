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
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address1');
            $table->string('address2');
            $table->string('zipcode');
            $table->string('city');
            $table->timestamps();

           // $table->foreignIdFor(\App\Models\Film::class)
             //   ->references('id')
               //  ->on('films');
            
           //$table->foreignIdFor(\App\Models\Salle::class)
             //  ->references('id')
             // ->on('salles');
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinemas');
    }
};
