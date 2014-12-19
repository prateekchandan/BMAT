<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('users');
		
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password', 60)->nullable();
			$table->string('name', 200)->nullable();
			$table->string('gender',30)->nullable();
			$table->string('school', 200)->nullable();
			$table->string('parent', 200)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('country', 50)->nullable();
			$table->date('dob')->nullable();
			$table->integer('plan')->nullable();
			$table->string('fbid',20)->nullable();
			$table->boolean('paid')->default(false);
			$table->date('payment_date')->nullable();
			$table->timestamps();
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}


}
