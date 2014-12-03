<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectUserTableId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_user', function($table)
        {
			# Increments method will make a Primary, Auto-Incrementing field.
			# Most tables start off this way
			#$table->increments('id')->before('project_id');
			DB::statement("ALTER TABLE project_user ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_user', function($table)
        {
        	$table->dropColumn('id');
        });
	}

}
