<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create expense_project pivot table
		Schema::create('expense_project', function($table) {
			# AI, PK
			# none needed
			# General data...
			$table->integer('project_id')->unsigned()->nullable();
			$table->integer('expense_id')->unsigned()->nullable();
			
			# Define foreign keys...
			$table->foreign('project_id')->references('id')->on('projects');
			$table->foreign('expense_id')->references('id')->on('expenses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the expense_project pivot table
		Schema::drop('expense_project');
	}

}
