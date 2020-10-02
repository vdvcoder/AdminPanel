<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponCodesTable extends Migration
{
    public function up()
    {
        Schema::create('coupon_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->decimal('reward', 15, 2)->nullable();
            $table->integer('quantity');
            $table->boolean('is_disposable')->default(0)->nullable();
            $table->datetime('expires_at')->nullable();
            $table->datetime('used_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
