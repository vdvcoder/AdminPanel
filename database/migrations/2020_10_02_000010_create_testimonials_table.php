<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('customer')->nullable();
            $table->string('quote')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
