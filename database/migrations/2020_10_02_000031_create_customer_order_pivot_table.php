<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerOrderPivotTable extends Migration
{
    public function up()
    {
        Schema::create('customer_order', function (Blueprint $table) {
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id', 'customer_id_fk_2311803')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id', 'order_id_fk_2311803')->references('id')->on('orders')->onDelete('cascade');
        });
    }
}
