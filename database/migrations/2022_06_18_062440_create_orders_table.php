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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->enum('status', ['pending', 'delivering', 'succeed', 'cancelled'])
                ->default('pending')->index();
            $table->unsignedBigInteger('total')->index();
            $table->unsignedBigInteger('sub_total')->index();
            $table->unsignedBigInteger('shipping_fee');
            $table->enum('payment_method', ['cod', 'banking'])->index()->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->enum('gender', ['other', 'male', 'female'])->index()->nullable();
            $table->text('address')->fullText()->nullable();
            $table->string('phone_number')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
