<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the projects table
		Schema::create('projects', function($table) {

			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			$table->increments('id');

			# The rest of the fields...
			$table->string('project_name');
			$table->string('project_description');
			$table->integer('proforma_id')->unsigned();
			$table->integer('start_year')->unsigned();
			$table->integer('end_year')->unsigned();
			$table->decimal('tax_rate');
			$table->decimal('discount_rate');
			$table->decimal('terminal_growth_rate');
			$table->decimal('terminal_rd');
			$table->decimal('terminal_sga');
			$table->decimal('capex_percentage');
			$table->decimal('present_value');
			$table->decimal('terminal_value');
			$table->decimal('valuation');

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
		// drop the projects table
		Schema::drop('projects');
	}

}
