<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->bigIncrements('developer_id');
            $table->integer('user_id')->nullable();
            $table->string('developer_name')->nullable();
            $table->string('owner')->nullable();
            $table->date('established_date');
            $table->string('associations')->nullable();
            $table->string('address')->nullable();
            $table->longText('introduction')->nullable();
            $table->longText('services')->nullable();
            $table->string('project_completed')->nullable();
            $table->tinyInteger('developer_status')->nullable()->default(0);
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
        Schema::dropIfExists('developers');
    }
}
