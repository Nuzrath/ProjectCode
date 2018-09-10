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
            $table->increments('std_id')->unique()->autoincrements();
			$table->string('fname')->default('M');
			$table->string('lname')->default('siva');
			$table->text('address')->nullable();
			$table->string('city')->default('Colombo 06');
			$table->string('country')->default('Sri Lanka');
			$table->date('dob')->default('1992.05.03');
			$table->integer('contact1')->default('0713123456');
			$table->integer('contact2')->nullable();
			$table->string('nic')->nullable()->default('555555555V');
			$table->string('passport_no')->nullable();
			$table->string('gender');
			$table->string('email')->nullable();
			$table->string('is_active')->default('1');//1= active, 0 = not active
			$table->integer('course_id');
			$table->integer('subject_id');
			
			$table->integer('role_id')->index()->nullable()->unsigned()->default('2');
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
        Schema::dropIfExists('students');
    }
}
