<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractTypeJoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_type_joins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('contract_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('cascade');
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
        Schema::dropIfExists('contract_type_joins');
    }
}
