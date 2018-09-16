<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couse_subject', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('course_id')->index()->nullable()->unsigned();
            $table->integer('subject_id')->index()->nullable()->unsigned();
            $table->string('duration');
            $table->integer('fee_id')->index()->unsigned()->nullable();//for just checking nullable
            $table->integer('discount_id');
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
        Schema::dropIfExists('couse_subject');
    }
}
