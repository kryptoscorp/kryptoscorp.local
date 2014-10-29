<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('cevents', function($table)
		{
		    $table->increments('id');
		    $table->integer('users_id')->unsigned();
		    $table->foreign('users_id')->references('id')->on('users');
			$table->string('name',200);
			$table->date('fecha_inicio');
			$table->date('fecha_final');
			$table->date('fecha_cobro');
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
		//
		Schema::drop('cevents');
	}

}
