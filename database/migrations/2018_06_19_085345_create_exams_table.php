<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('no');
			$table->integer('exam_id')->unique();
			
            $table->integer('student_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->integer('subject_id')->unsigned();
			$table->date('exam_date');
            $table->time('from');
			$table->time('to');
			$table->integer('marks');
			$table->string('grade');
			$table->string('status');
            $table->timestamps();
			
			
			/*$table->foreign('student_id')->references('id')->on('students');
			$table->foreign('course_id')->references('id')->on('course_subject');
			$table->foreign('subject_id')->references('id')->on('course_subject');*/
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
