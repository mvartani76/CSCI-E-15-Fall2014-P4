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
			$table->decimal('amount');
			$table->integer('year')->unsigned();							

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
