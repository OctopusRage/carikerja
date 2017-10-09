<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTypeJoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_type_joins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_type_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('job_type_id')->references('id')->on('job_types')->onDelete('cascade');
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
        Schema::dropIfExists('job_type_joins');
    }
}
