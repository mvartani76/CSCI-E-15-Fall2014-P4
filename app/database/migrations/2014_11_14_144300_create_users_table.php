<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the users table
		Schema::create('users', function($table) {

			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			$table->increments('id');

			# The rest of the fields...
			$table->string('first_name');
			$table->string('last_name');
			$table->string('company_name');
			$table->string('username')->unique();
			$table->string('address_1');
			$table->string('address_2');
			$table->string('city');
			$table->string('state');
			$table->string('zip_code');
			$table->string('country');
			$table->string('email')->unique();
			$table->string('mobile_phone');
			$table->string('password');
			$table->integer('permission_id')->unsigned();

			# Define Foreign Key
			$table->foreign('permission_id')->references('id')->on('permissions');

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
		// drop the users table
		Schema::drop('users');
	}

}
