<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->foreignId('type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('department_id')->constrained()->cascadeOnDelete();
            $table->foreignId('scent_notes_id')->constrained()->cascadeOnDelete();
            $table->boolean('variation')->nullable();
            $table->string('description')->nullable();
            $table->string('size')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('min_price', 9, 3)->nullable();
            $table->decimal('max_price', 9, 3)->nullable();
            $table->decimal('sale_price', 9, 3)->nullable();
            $table->string('color')->nullable();
            $table->string('video')->nullable();
            $table->boolean('featured')->default(0);
            $table->boolean('menu')->default(0);
            $table->boolean('in_stock')->default(1);
            $table->boolean('status')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
