<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_anklets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_anklets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_bangles', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_bangles');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_bracelets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_bracelets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_chains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_chains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_earrings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_earrings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_fancychains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_fancychains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_necklaces', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_necklaces');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_nosepins', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_nosepins');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_pendants', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_pendants');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_rings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_rings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_secondstuds', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_secondstuds');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kdgold_product_studs', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kdgold_product_studs');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_anklets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_anklets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_bangles', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_bangles');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_bracelets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_bracelets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_chains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_chains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_earrings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_earrings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_fancychains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_fancychains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_necklaces', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_necklaces');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_nosepins', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_nosepins');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_pendants', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_pendants');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_rings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_rings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_secondstuds', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_secondstuds');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('18kgold_product_studs', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('18kgold_product_studs');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_anklets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_anklets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_bangles', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_bangles');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_bracelets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_bracelets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_chains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_chains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_earrings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_earrings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_fancychains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_fancychains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_kadas', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_kadas');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_necklaces', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_necklaces');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_nosepins', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_nosepins');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_pendants', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_pendants');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_rings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_rings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_secondstuds', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_secondstuds');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('22kgold_product_studs', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('22kgold_product_studs');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->integer('userid')->nullable();
            $table->integer('productid')->nullable();
            $table->string('product_code')->nullable();
            $table->string('table_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->string('cat_id')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories_subs', function (Blueprint $table) {
            $table->string('sub_cat_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories_subs');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('goldrate', function (Blueprint $table) {
            $table->id();
            $table->integer('18k_1gm')->nullable();
            $table->integer('22k_1gm')->nullable();
            $table->string('updated_on')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('goldrate');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('goldrate_history', function (Blueprint $table) {
            $table->id();
            $table->integer('18k_1gm')->nullable();
            $table->integer('22k_1gm')->nullable();
            $table->string('updated_on')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('goldrate_history');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gold_schemes', function (Blueprint $table) {
            $table->id();
            $table->string('scheme_code')->nullable();
            $table->string('scheme_name')->nullable();
            $table->decimal('monthly_installment')->nullable();
            $table->integer('term_months')->nullable();
            $table->decimal('bonus_amount')->nullable();
            $table->decimal('final_value')->nullable();
            $table->text('description')->nullable();
            $table->enum('status')->nullable()->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gold_schemes');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gst', function (Blueprint $table) {
            $table->id();
            $table->string('tax_name')->nullable();
            $table->decimal('tax_percent')->nullable();
            $table->string('updated_on')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gst');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_positions', function (Blueprint $table) {
            $table->id();
            $table->string('position_name')->nullable();
            $table->text('description')->nullable();
            $table->integer('no_of_vacancy')->nullable();
            $table->dateTime('date_posted')->nullable();
            $table->string('status')->nullable()->default('Active');
            $table->string('location')->nullable();
            $table->string('department')->nullable();
            $table->string('experience_required')->nullable();
            $table->text('qualification')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_positions');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('login', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('name')->nullable();
            $table->string('account_type')->nullable();
            $table->string('account_status')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('login');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('log_table', function (Blueprint $table) {
            $table->integer('log_id')->nullable();
            $table->string('action')->nullable();
            $table->string('action_by')->nullable();
            $table->string('timestamp')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('log_table');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('maintances', function (Blueprint $table) {
            $table->integer('mid')->nullable();
            $table->text('details')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('maintances');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('making_charges', function (Blueprint $table) {
            $table->id();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('model_name')->nullable();
            $table->integer('cat_id')->nullable();
            $table->decimal('normal_mc')->nullable();
            $table->decimal('discount_mc')->nullable();
            $table->decimal('excp_normal_mc')->nullable();
            $table->decimal('excp_discount_mc')->nullable();
            $table->string('last_updated')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('making_charges');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metals', function (Blueprint $table) {
            $table->integer('metal_id')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metals');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metals_purity', function (Blueprint $table) {
            $table->string('metalpurity_id')->nullable();
            $table->integer('metal_id')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metals_purity');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metals_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('18kgold')->nullable();
            $table->integer('22kgold')->nullable();
            $table->integer('normal_silver')->nullable();
            $table->integer('925_silver')->nullable();
            $table->integer('rosegold_silver')->nullable();
            $table->decimal('diamond_rate')->nullable();
            $table->string('updated_on')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metals_rates');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metals_rates_history', function (Blueprint $table) {
            $table->id();
            $table->decimal('normal_silver')->nullable();
            $table->decimal('925_silver')->nullable();
            $table->decimal('rosegold_silver')->nullable();
            $table->integer('diamondrate')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('updated_on')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metals_rates_history');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('models', function (Blueprint $table) {
            $table->integer('model_id')->nullable();
            $table->string('model_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('userid')->nullable();
            $table->integer('productid')->nullable();
            $table->string('product_code')->nullable();
            $table->string('table_name')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_activity_log', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('activity_date')->nullable();
            $table->string('activity_time')->nullable();
            $table->string('product_code')->nullable();
            $table->string('table_name')->nullable();
            $table->string('activity_type')->nullable()->default('ADD');
            $table->integer('v_status')->nullable();
            $table->string('v_by')->nullable();
            $table->string('v_on')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_activity_log');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_codes', function (Blueprint $table) {
            $table->integer('product_code_id')->nullable();
            $table->string('p1_brand')->nullable();
            $table->string('p2_metal')->nullable();
            $table->string('p3_purity')->nullable();
            $table->string('p4_cat')->nullable();
            $table->integer('p5_uniquecode')->nullable();
            $table->string('full_code')->nullable();
            $table->string('table_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_codes');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_code_prefix', function (Blueprint $table) {
            $table->integer('pc_prefix_id')->nullable();
            $table->string('code')->nullable();
            $table->text('name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_code_prefix');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_anklets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_anklets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_bangles', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_bangles');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_bracelets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_bracelets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_chains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_chains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_earrings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_earrings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_fancychains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_fancychains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_necklaces', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_necklaces');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_nosepins', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_nosepins');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_pendants', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_pendants');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_rings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_rings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_secondstuds', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_secondstuds');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rosegold_product_studs', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rosegold_product_studs');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scheme_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('scheme_id')->nullable();
            $table->decimal('amount')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('receipt_no')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scheme_payments');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_anklets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_anklets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_bangles', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_bangles');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_bracelets', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_bracelets');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_chains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_chains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_earrings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_earrings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_fancychains', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_fancychains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_kadas', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_kadas');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_necklaces', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_necklaces');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_nosepins', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_nosepins');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_pendants', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_pendants');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_rings', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_rings');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_secondstuds', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_secondstuds');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silver_product_studs', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('metal_id')->nullable();
            $table->integer('metalpurity_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->string('gender')->default('Unisex');
            $table->text('size')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('gross_weight')->nullable();
            $table->string('product_model')->nullable();
            $table->integer('stone_available')->default(0);
            $table->string('stone_desc')->nullable();
            $table->string('stone_color')->nullable();
            $table->text('stone_shape')->nullable();
            $table->integer('stone_count')->nullable();
            $table->decimal('stone_weight')->nullable();
            $table->integer('stone_cost')->nullable();
            $table->integer('diamond_available')->nullable();
            $table->text('dia_desc')->nullable();
            $table->decimal('dia_cent')->nullable();
            $table->integer('dia_count')->nullable();
            $table->text('dia_cut')->nullable();
            $table->text('dia_color')->nullable();
            $table->text('dia_clarity')->nullable();
            $table->text('dia_shape')->nullable();
            $table->integer('beads_available')->nullable();
            $table->text('beads_desc')->nullable();
            $table->text('beads_color')->nullable();
            $table->integer('beads_count')->nullable();
            $table->decimal('beads_weight')->nullable();
            $table->integer('beads_cost')->nullable();
            $table->integer('pearls_available')->nullable();
            $table->text('pearls_desc')->nullable();
            $table->text('pearls_color')->nullable();
            $table->integer('pearls_count')->nullable();
            $table->decimal('pearls_weight')->nullable();
            $table->integer('pearls_cost')->nullable();
            $table->text('img1_webp')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('search_keywords')->nullable();
            $table->integer('verified')->nullable();
            $table->string('verified_by')->nullable();
            $table->text('verified_on')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('delist')->default(0);
            $table->integer('supplier_id')->nullable();
            $table->text('manufacture_time')->nullable();
            $table->text('tag')->nullable();
            $table->string('t_display_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silver_product_studs');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->integer('supplier_id')->nullable();
            $table->string('supplier_name')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_schemes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('scheme_type')->nullable();
            $table->string('scheme_name')->nullable();
            $table->decimal('monthly_amount')->nullable();
            $table->string('start_date')->nullable();
            $table->integer('months_completed')->default(0);
            $table->enum('status')->default('active');
            $table->string('code')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_schemes');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_wishlist', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('table_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_wishlist');
    }
};
