<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponCodeUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('coupon_code_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_2311729')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('coupon_code_id');
            $table->foreign('coupon_code_id', 'coupon_code_id_fk_2311729')->references('id')->on('coupon_codes')->onDelete('cascade');
        });
    }
}
