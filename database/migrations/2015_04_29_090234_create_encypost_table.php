<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncypostTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encypost', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('encycategory_id');
            $table->string('specdoctor');
            $table->string('avatar');
            $table->string('title');
            $table->string('name');
            $table->string('tag')->nullable();
            $table->string('descript')->nullable();
            $table->longText('opisanie');
            $table->longText('history')->nullable();
            $table->longText('lechenie')->nullable();
            $table->longText('diagnostica')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encypost');
    }

}
