<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          
			$table->integer('student_id')->unique();
			$table->string('first_name');
			$table->string('last_name');
			$table->text('add_no');
			$table->string('city');
			$table->string('country');
			$table->date('date_of_birth')->nullable();
			$table->integer('contact_no1');
			$table->string('contact_no2');
			$table->string('nic_no');
			$table->string('passport_no');
			$table->string('gender');
			$table->string('email_id')->unique()->nullable();
			$table->date('enroll_date');
			$table->string('student_img');
			$table->string('status');
			
			$table->integer('course_id')->unsigned();
			$table->integer('subject_id')->unsigned();
            $table->timestamps();
			
			/*$table->foreign('course_id')->references('id')->on('courses');
			$table->foreign('subject_id')->references('id')->on('subjects');*/
			
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
