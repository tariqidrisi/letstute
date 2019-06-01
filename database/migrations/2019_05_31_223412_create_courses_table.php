<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('description');
            $table->integer('price');
            $table->text('duration');
            $table->integer('likes');
            $table->integer('category_id')->unsigned();
            $table->integer('class_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('courses', function($table) {
           $table->foreign('category_id')->references('id')->on('categories');
           $table->foreign('class_id')->references('id')->on('classes');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function(Blueprint $table)
        {
            $table->dropForeign('category_id'); //
            $table->dropForeign('class_id'); //
        });
    }
}
