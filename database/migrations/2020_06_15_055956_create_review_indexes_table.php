<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewIndexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_indexes', function (Blueprint $table) {
            $table->bigIncrements('review_index_id');
            $table->string('review_index_title')->nullable();
            $table->integer('parent_index_id')->nullable();
            $table->string('index_category_title')->nullable();
            $table->integer('index_category_id')->nullable();
            $table->float('minimum_score')->nullable();
            $table->float('maximum_score')->nullable();
            $table->string('min_index_descriptor')->nullable();
            $table->string('max_index_descriptor')->nullable();
            $table->string('index_type')->nullable();
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
        Schema::dropIfExists('review_indexes');
    }
}
