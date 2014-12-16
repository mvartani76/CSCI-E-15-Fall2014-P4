<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenueRevenueTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create revenue_revenue_types pivot table
		Schema::create('revenue_revenue_type', function($table) {
			# AI, PK
			# none needed
			# General data...
			$table->integer('revenue_id')->unsigned()->nullable();
			$table->integer('revenue_type_id')->unsigned()->nullable();
			
			# Define foreign keys...
			$table->foreign('revenue_id')->references('id')->on('revenues');
			$table->foreign('revenue_type_id')->references('id')->on('revenue_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the revenue_revenue_type pivot table
		Schema::drop('revenue_revenue_type');
	}

}
