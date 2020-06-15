<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('property_id');
            $table->string('property_name')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('category_name')->nullable();
            $table->string('property_area')->nullable();
            $table->string('property_video')->nullable();
            $table->date('property_launch_date')->nullable();
            $table->string('property_address')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('city_name')->nullable();
            $table->string('property_location')->nullable();
            $table->string('property_description')->nullable();
            $table->integer('developer_id')->nullable();
            $table->integer('price_plane_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('property_rating')->nullable();
            $table->string('innovation_detail')->nullable();
            $table->tinyInteger('property_status')->nullable()->default(0);
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
        Schema::dropIfExists('properties');
    }
}
