<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email',100)->unique();
			$table->string('name',200);
			$table->string('password',100);
			$table->string('phone')->nullable();
			$table->string('direccion')->nullable();
			$table->string('comentarios')->nullable();
			$table->boolean('admin')->nullable();
			$table->string('remember_token',100)->nullable();
			$table->timestamps();
		});

		//creates the admin user
		DB::table('users')->insert(
			array(
				'email'=>'webmaster@kryptoscorp.com',
				'name'=>'Admin',
				'password'=>Hash::make('@kryptos2014'),
				'admin'=>true
			)
		);	
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
