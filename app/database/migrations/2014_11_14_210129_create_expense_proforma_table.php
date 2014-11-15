<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseProformaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create expense_proforma pivot table
		Schema::create('expense_proforma', function($table) {
			# AI, PK
			# none needed
			# General data...
			$table->integer('expense_id')->unsigned();
			$table->integer('proforma_id')->unsigned();

			# Define foreign keys...
			$table->foreign('expense_id')->references('id')->on('expenses');
			$table->foreign('proforma_id')->references('id')->on('proformas');
		});			
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the expense_proforma pivot table
		Schema::drop('expense_proforma');
	}

}
