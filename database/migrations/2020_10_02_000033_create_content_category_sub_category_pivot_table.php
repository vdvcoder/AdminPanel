<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategorySubCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_sub_category', function (Blueprint $table) {
            $table->unsignedInteger('sub_category_id');
            $table->foreign('sub_category_id', 'sub_category_id_fk_2312860')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->unsignedInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_2312860')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}
