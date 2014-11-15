<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaRevenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create proforma_revenue pivot table
		Schema::create('proforma_revenue', function($table) {
			# AI, PK
			# none needed
			# General data...
			$table->integer('proforma_id')->unsigned();
			$table->integer('revenue_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('proforma_id')->references('id')->on('proformas');
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
		// drop the proforma_revenue pivot table
		Schema::drop('proforma_revenue');
	}

}
