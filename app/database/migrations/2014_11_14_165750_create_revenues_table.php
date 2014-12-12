<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the revenues table
		Schema::create('revenues', function($table) {

			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			$table->increments('id');

			$table->string('revenue_description');		
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
		// drop the revenues table
		Schema::drop('revenues');
	}

}
