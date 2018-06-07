<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
			
			$table->integer('staff_id');->unique();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('address');
			$table->string('country');
			$table->integer('contact_no');
			$table->date('date_of_birth');
			$table->string('nic_no');
			$table->string('passport_no');
			$table->string('gender');
			$table->string('email_id');->unique();
			$table->string('qualification');
			$table->date('date_of_appointment');
			$table->string('certificates_img');
			$table->string('status');
			$table->string('staff_pic');
			
			$table->integer('department_id');->unsigned();
            $table->timestamps();
			
			$table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
