<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentfees', function (Blueprint $table) {
            $table->increments('pay_fee_id')->unique();
			$table->integer('student_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->integer('subject_id')->unsigned();
			$table->double('paid_amount', 8, 2);
			$table->string('type_of_pay'); /****admission or course fee*/
			$table->string('status');
			$table->integer('discountno');
			$table->double('discount_amount');
			$table->integer('staff_id'); /* should detect when login receptionist*/
			
			/*$table->foreign('course_id')->references('id')->on('course_subject');	
			$table->foreign('subject_id')->references('id')->on('course_subject');	
			$table->foreign('student_id')->references('id')->on('students');	*/	
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
        Schema::dropIfExists('paymentfees');
    }
}
