<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('certificate_id')->unique();
            $table->integer('student_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->integer('exam_id')->unsigned();
			$table->string('issued__by');
			$table->date('issued_date');
            $table->string('taken_by')->nullable;
			$table->integer('taken_by_nic')->nullable;
			$table->integer('contact_no');
            $table->timestamps();
			
			
			/*$table->foreign('student_id')->references('id')->on('students');
			$table->foreign('course_id')->references('id')->on('course_subject');
			$table->foreign('subject_id')->references('id')->on('course_subject');
			$table->foreign('exam_id')->references('id')->on('exams');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
