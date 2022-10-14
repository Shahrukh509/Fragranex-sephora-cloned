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
        Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->foreignId('role_id')->constrained()->cascadeOnDelete();
                $table->string('ip_address')->nullable();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->text('address_1')->nullable();
                $table->text('address_2')->nullable();
                $table->string('city')->nullable();
                $table->string('state_of_province')->nullable();
                $table->unsignedMediumInteger('zipcode')->length(5)->nullable();
                $table->string('country')->nullable();
                $table->string('phone')->nullable();
                $table->string('account_type')->nullable();
                $table->string('email')->unique()->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password')->nullable();
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
