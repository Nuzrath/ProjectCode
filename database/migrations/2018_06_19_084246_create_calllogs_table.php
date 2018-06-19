<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalllogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calllogs', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('contact_no')->unique();
			$table->string('caller_name');
			
			$table->integer('course_id')->unsigned();
			$table->string('address');
			$table->string('how_he_knows');
			$table->text('comment');
			$table->integer('staff_id')->unsigned();
			
			/*$table->foreign('course_id')->references('id')->on('courses');	
			$table->foreign('staff_id')->references('id')->on('staffs');*/			
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
        Schema::dropIfExists('calllogs');
    }
}
