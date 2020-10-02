<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->nullable();
            $table->string('order')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment')->nullable();
            $table->string('paid_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
