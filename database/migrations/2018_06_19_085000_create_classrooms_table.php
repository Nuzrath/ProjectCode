<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->integer('classroom_id')->unique();
			
			$table->integer('staff_id')->unsigned();/* == teacher ==*/
			
			$table->integer('available_seats');
			$table->time('from_time'); 
			$table->time('to_time'); 
			$table->string('status');
			$table->boolean('whiteboartd?');
			$table->boolean('PC?');
			$table->timestamps();
			
			/*$table->foreign('staff_id')->references('id')->on('staffs');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
