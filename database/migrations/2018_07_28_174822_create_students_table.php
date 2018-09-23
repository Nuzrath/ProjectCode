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
			$table->string('fname');
			$table->string('lname');
			$table->text('address');
			$table->string('city');
			$table->string('country')->default('Sri Lanka');
			$table->date('dob')->default('1992.05.03');
			$table->integer('contact1');
			$table->integer('contact2')->nullable();
			$table->string('nic')->nullable();//nic no or Passport no
			$table->string('gender');
			$table->string('email')->nullable();
			$table->string('is_active')->default('1');//1= active, 0 = not active
			$table->integer('course_id');
			
			$table->integer('role_id')->index()->nullable()->unsigned();
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
