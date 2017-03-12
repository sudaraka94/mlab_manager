<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report',function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name_front');
            $table->string('name');
            $table->integer('age_years')->default(0);
            $table->integer('age_months')->default(0);
            $table->integer('age_days')->default(0);
            $table->string('type');
            $table->string('gender');
            $table->date('date');
            $table->string('specimen');
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
       Schema::drop('report');
    }
}
