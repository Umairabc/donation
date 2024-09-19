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
        Schema::create('donations', function (Blueprint $table) {
            $table->id(); 
            $table->string('donation_type'); 
            $table->string('full_name'); 
            $table->string('phone_number'); 
            $table->string('email'); 
            $table->string('town_city');
            $table->decimal('price', 10, 2); 
            $table->string('donation_method'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
