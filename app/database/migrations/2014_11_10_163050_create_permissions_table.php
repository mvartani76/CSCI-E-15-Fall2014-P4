<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the permissions table
		Schema::create('permissions', function($table) {

			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			$table->increments('permission_id');

			# The rest of the fields...
			$table->string('permission_level');
			$table->boolean('view');
			$table->boolean('add');
			$table->boolean('update');
			$table->boolean('delete');
			$table->boolean('approve');
			$table->boolean('customize');

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
		// drop the permissions table
		Schema::drop('permissions');
	}

}
