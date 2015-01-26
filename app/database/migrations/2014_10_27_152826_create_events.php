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
		    $table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
			$table->string('name',200);
			$table->string('email_cliente',100);
			$table->string('direccion');
			$table->string('comentarios');
			$table->date('fecha_inicio');
			$table->date('fecha_final');
			$table->date('fecha_cobro');
			$table->boolean('admin')->nullable()->default(false);
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
