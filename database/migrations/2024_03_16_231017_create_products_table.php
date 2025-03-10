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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->foreignId('laptops_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('phones_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('prices_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('photo');
            $table->string('status')->default('en stock');;
            $table->integer('nombre');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
