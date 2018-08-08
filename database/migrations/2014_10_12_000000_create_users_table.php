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
            $table->increments('id')->autoIncrement();
            $table->string('user_id') ->nullable();
            $table->string('email')->unique()->default('nulu@gmail.com');
            $table->string('password')->default('1234');
			$table->integer('role_id')->index()->unsigned()->default(2);
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
