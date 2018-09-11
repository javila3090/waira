<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('caption',1000)->nullable();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('button')->nullable();
            $table->string('button_target')->nullable();
            $table->unsignedInteger('banner_type_id');
            $table->foreign('banner_type_id')->references('id')->on('banner_types');
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
        Schema::dropIfExists('banners');
    }
}
