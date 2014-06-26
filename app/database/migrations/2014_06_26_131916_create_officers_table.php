<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('officers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('rank');
			$table->string('phone');
			$table->string('cellphone');
			$table->string('role');
			$table->integer('department_id')->unsigned()->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('officers');
	}

}
