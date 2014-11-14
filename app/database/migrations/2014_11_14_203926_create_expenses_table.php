<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the expenses table
		Schema::create('expenses', function($table) {

			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			$table->increments('id');

			$table->string('expense_description');
		
			$table->integer('expense_type_id')->unsigned();
			$table->integer('proforma_id')->unsigned();
			$table->decimal('amount');

			# Define Foreign Keys
			$table->foreign('expense_type_id')->references('id')->on('expense_types');
			$table->foreign('proforma_id')->references('id')->on('proformas');
						

			# This generates two columns: `created_at` and `updated_at` to
			# keep track of changes to a row
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
		// drop the expenses table
		Schema::drop('expenses');
	}

}
