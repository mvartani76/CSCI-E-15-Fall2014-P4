<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectRevenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create project_revenue pivot table
		Schema::create('project_revenue', function($table) {
			# AI, PK
			# none needed
			# General data...
			$table->integer('project_id')->unsigned()->nullable();
			$table->integer('revenue_id')->unsigned()->nullable();
			
			# Define foreign keys...
			$table->foreign('project_id')->references('id')->on('projects');
			$table->foreign('revenue_id')->references('id')->on('revenues');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the project_revenue pivot table
		Schema::drop('project_revenue');
	}

}
