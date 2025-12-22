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
        Schema::dropIfExists('gold_rates');
        Schema::create('gold_rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('metal_purity_id');
            $table->decimal('rate_per_gram', 10, 2);
            $table->date('effective_date');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('metal_purity_id')->references('id')->on('metal_purities')->onDelete('cascade');
            $table->index(['effective_date', 'metal_purity_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_rates');
    }
};
