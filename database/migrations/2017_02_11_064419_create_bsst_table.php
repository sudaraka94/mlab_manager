<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBsstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bsst',function (Blueprint $table){
            $table->integer('report_id')->unsigned();
            $table->float('fbs')->nullable();
            $table->float('pre_breakfast')->nullable();
            $table->float('post_breakfast')->nullable();
            $table->float('pre_lunch')->nullable();
            $table->float('post_lunch')->nullable();
            $table->float('pre_dinner')->nullable();
            $table->float('post_dinner')->nullable();
            $table->foreign('report_id')->references('id')->on('report');
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
        Schema::drop('bsst');
    }
}
