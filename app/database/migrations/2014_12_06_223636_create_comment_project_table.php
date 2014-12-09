<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create comment_project pivot table
		Schema::create('comment_project', function($table) {

			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			$table->increments('id');

			# General data...
			$table->integer('comment_id')->unsigned()->nullable();
			$table->integer('project_id')->unsigned()->nullable();
			
			# Define foreign keys...
			$table->foreign('comment_id')->references('id')->on('comments');
			$table->foreign('project_id')->references('id')->on('projects');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the comment_project pivot table
		Schema::drop('comment_project');
	}

}
