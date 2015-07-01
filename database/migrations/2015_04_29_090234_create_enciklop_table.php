<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnciklopTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encycategory', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('encycategory_id');
            $table->string('title');
            $table->string('name');
            $table->string('tag')->nullable();
            $table->string('descript')->nullable();
            $table->longText('text');
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
        Schema::drop('encycategory');
    }

}
