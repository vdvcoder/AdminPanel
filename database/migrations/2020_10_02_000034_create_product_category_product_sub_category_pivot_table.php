<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryProductSubCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_category_product_sub_category', function (Blueprint $table) {
            $table->unsignedInteger('product_sub_category_id');
            $table->foreign('product_sub_category_id', 'product_sub_category_id_fk_2312866')->references('id')->on('product_sub_categories')->onDelete('cascade');
            $table->unsignedInteger('product_category_id');
            $table->foreign('product_category_id', 'product_category_id_fk_2312866')->references('id')->on('product_categories')->onDelete('cascade');
        });
    }
}
