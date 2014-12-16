<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseExpenseTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create expense_expense_types pivot table
		Schema::create('expense_expense_type', function($table) {
			# AI, PK
			# none needed
			# General data...
			$table->integer('expense_id')->unsigned()->nullable();
			$table->integer('expense_type_id')->unsigned()->nullable();
			
			# Define foreign keys...
			$table->foreign('expense_id')->references('id')->on('expenses');
			$table->foreign('expense_type_id')->references('id')->on('expense_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the expense_expense_type pivot table
		Schema::drop('expense_expense_type');
	}

}
