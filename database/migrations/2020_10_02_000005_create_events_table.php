<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('information')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->integer('how_many_people')->nullable();
            $table->string('location')->nullable();
            $table->string('contact_information')->nullable();
            $table->datetime('starts')->nullable();
            $table->datetime('ends')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
