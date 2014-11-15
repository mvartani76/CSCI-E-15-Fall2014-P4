<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create project_user pivot table
		Schema::create('project_user', function($table) {
			# AI, PK
			# none needed
			# General data...
			$table->integer('project_id')->unsigned();
			$table->integer('user_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('project_id')->references('id')->on('projects');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the project_user pivot table
		Schema::drop('project_user');
	}

}
