<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenueTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the revenue_types table
		Schema::create('revenue_types', function($table) {

			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			$table->increments('id');

			$table->string('revenue_type');
			$table->string('revenue_type_description');

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
		// drop the revenue_types table
		Schema::drop('revenue_types');
	}

}
