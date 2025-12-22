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
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            // Basic Identification
            $table->string('product_code', 100)->unique();
            $table->string('sku', 100)->nullable()->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            
            // Classification
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedInteger('metal_id')->nullable();
            $table->unsignedInteger('metal_purity_id')->nullable();
            $table->unsignedInteger('supplier_id')->nullable();
            
            // Inventory & Status
            $table->integer('stock_quantity')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_visible')->default(true);
            $table->boolean('delist')->default(false);
            
            // Detailed Specs (Physical)
            $table->enum('gender', ['Male','Female','Unisex','Kids'])->default('Unisex');
            $table->string('size', 100)->nullable();
            $table->decimal('gross_weight', 10, 5)->default(0.00000);
            $table->decimal('net_weight', 10, 5)->nullable();
            $table->string('product_model', 100)->nullable();
            $table->string('manufacture_time', 100)->nullable();
            
            // Stone Information
            $table->boolean('stone_available')->default(false);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color', 100)->nullable();
            $table->string('stone_shape', 100)->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight', 10, 5)->nullable();
            $table->decimal('stone_cost', 15, 2)->nullable();
            
            // Diamond Information
            $table->boolean('diamond_available')->default(false);
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent', 10, 5)->nullable();
            $table->integer('dia_count')->nullable();
            $table->string('dia_cut', 100)->nullable();
            $table->string('dia_color', 100)->nullable();
            $table->string('dia_clarity', 100)->nullable();
            $table->string('dia_shape', 100)->nullable();
            
            // Beads Information
            $table->boolean('beads_available')->default(false);
            $table->text('beads_desc')->nullable();
            $table->string('beads_color', 100)->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight', 10, 5)->nullable();
            $table->decimal('beads_cost', 15, 2)->nullable();
            
            // Pearls Information
            $table->boolean('pearls_available')->default(false);
            $table->text('pearls_desc')->nullable();
            $table->string('pearls_color', 100)->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight', 10, 5)->nullable();
            $table->decimal('pearls_cost', 15, 2)->nullable();

            // Pricing Cache
            $table->decimal('price', 15, 2)->nullable()->comment('Cached calculated price');
            
            // SEO & Meta
            $table->text('search_keywords')->nullable();
            $table->text('tags')->nullable();
            
            $table->timestamps();

            // Indexes
            $table->index('price');
            $table->index('name');

            // Foreign Keys
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('metal_id')->references('id')->on('metals')->onDelete('set null');
            $table->foreign('metal_purity_id')->references('id')->on('metal_purities')->onDelete('set null');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('set null');
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
