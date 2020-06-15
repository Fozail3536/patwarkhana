<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('review_id');
            $table->date('review_date')->nullable();
            $table->integer('property_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('review_description')->nullable();
            $table->string('review_video')->nullable();
            $table->float('location_score')->nullable();
            $table->string('location_detail')->nullable();
            $table->float('development_score')->nullable();
            $table->string('development_detail')->nullable();
            $table->float('marketRate_score')->nullable();
            $table->string('marketRate_detail')->nullable();
            $table->float('reputation_score')->nullable();
            $table->string('reputation_detail')->nullable();
            $table->float('innovation_score')->nullable();
            $table->string('innovation_detail')->nullable();
            $table->float('overall_score')->nullable();
            $table->tinyInteger('review_status')->nullable()->default(0);
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
        Schema::dropIfExists('reviews');
    }
}
