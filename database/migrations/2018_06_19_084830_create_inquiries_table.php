<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('inq_id')->unique();
			$table->integer('staff_id'); /* reception when access on that login time*/
			$table->integer('contact_no');
			$table->string('person_name');
			$table->string('subject_head'); 
			$table->string('subject_body');
			$table->date('appointment_date');
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
        Schema::dropIfExists('inquiries');
    }
}
