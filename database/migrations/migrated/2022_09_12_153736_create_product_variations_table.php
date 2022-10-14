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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
             $table->foreignId('type_id')->constrained()->cascadeOnDelete();

            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('price', 9, 3)->nullable();
            $table->decimal('sale_price', 9, 3)->nullable();
            $table->string('SKU')->unique();
            $table->boolean('featured')->default(0);
            $table->boolean('menu')->default(0);
            $table->boolean('in_stock')->default(1);
            $table->boolean('status')->default(1);
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_variations');
    }
};
