<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->autoIncrement()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->string('email')->unique();
            $table->string('password');
			$table->integer('role_id')->index()->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
    }

	/* role_id ======
	
	0 = admin,
	1 = staff,
	2 = student*/
	
	
	
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
