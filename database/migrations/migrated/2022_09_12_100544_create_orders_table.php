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
        Schema::create('orders', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('coupon_id')->constrained()->cascadeOnDelete()->nullable();
            $table->string('email')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state_province')->nullable();
            $table->string('zip_code',5)->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('billing_type')->default('shipping');
            $table->string('order_type')->default('normal');
            $table->string('payment_method')->default('cod');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
