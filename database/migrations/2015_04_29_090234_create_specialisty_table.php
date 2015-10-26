<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecialistyTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialisty', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ids');
            $table->string('fio');
            $table->string('subname');
            $table->string('special');
            $table->string('obrazovanie');
            $table->string('opyt');
            $table->text('about');
            $table->string('works');
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
        Schema::drop('specialisty');
    }

}
