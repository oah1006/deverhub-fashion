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
            $table->unsignedBigInteger('customer_id');
            $table->enum('status', ['pending', 'delivering', 'succeed', 'cancelled']);
            $table->unsignedBigInteger('total')->index();
            $table->unsignedBigInteger('sub_total')->index();
            $table->unsignedBigInteger('shipping_fee');
            $table->enum('payment_method', ['cod', 'banking'])->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->enum('gender', ['other', 'male', 'female'])->index();
            $table->text('address')->fullText()->nullable();
            $table->string('phone_number');
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
