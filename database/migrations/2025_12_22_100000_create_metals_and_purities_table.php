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
        Schema::dropIfExists('metals');
        Schema::create('metals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('metal_purities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('metal_id');
            $table->string('name', 100);
            $table->decimal('purity_value', 6, 4)->nullable()->comment('e.g., 0.7500 for 18K');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('metal_id')->references('id')->on('metals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metal_purities');
        Schema::dropIfExists('metals');
    }
};
