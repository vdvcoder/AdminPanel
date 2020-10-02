<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->boolean('active')->default(0)->nullable();
            $table->boolean('featured')->default(0)->nullable();
            $table->boolean('new')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
