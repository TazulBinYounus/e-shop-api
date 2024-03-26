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

            $table->foreignId('category_id')->index();
            $table->foreignId('color_id')->nullable()->index();
            $table->foreignId('discount_id')->nullable()->index();
            $table->foreignId('inventory_id')->nullable()->index();
            

            $table->string('sku')->unique();
            $table->string('slug')->unique();

            $table->json('name')->nullable();
            $table->json('description')->nullable();

            $table->enum('size', ['SX', 'S', 'M', 'L', 'XL'])->nullable();

            // Price
            $table->decimal('price', 10, 2)->default(0);
        
            $table->string('is_active')->default(1);
            // Soft deletes
            $table->softDeletes();
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
