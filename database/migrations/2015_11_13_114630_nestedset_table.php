<?php

use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class NestedsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category', function ($table) {
            $table->unsignedInteger('_lft')->nullable();
            $table->unsignedInteger('_rgt')->nullable();
            $table->unsignedInteger('parent_id')->nullable();

            $table->index(['_lft', '_rgt', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category', function ($table) {
            NestedSet::dropColumns($table);
        });
    }
}
