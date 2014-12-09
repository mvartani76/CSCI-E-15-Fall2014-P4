<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create comment_intended_user pivot table
		Schema::create('comment_user', function($table) {

			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			$table->increments('id');

			# General data...
			$table->integer('comment_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			
			# Define foreign keys...
			$table->foreign('comment_id')->references('id')->on('comments');
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
		// drop the project_intended_user pivot table
		Schema::drop('comment_user');
	}

}
