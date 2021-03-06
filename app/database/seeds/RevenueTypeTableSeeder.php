<?php
class RevenueTypeTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE revenue_types');

		# Revenue_types
	    $revenue_type1 = new Revenue_type();
		$revenue_type1->revenuetype = 'Hardware Product Sales';
		$revenue_type1->revenue_type_description = 'Revenues from HW products';
		$revenue_type1->save();

		$revenue_type2 = new Revenue_type();
		$revenue_type2->revenuetype = 'Software Product Sales';
		$revenue_type2->revenue_type_description = 'Revenues from SW products';
		$revenue_type2->save();

		$revenue_type3 = new Revenue_type();
		$revenue_type3->revenuetype = 'License Fees';
		$revenue_type3->revenue_type_description = 'Revenues from Licensing';
		$revenue_type3->save();

		$revenue_type4 = new Revenue_type();
		$revenue_type4->revenuetype = 'Royalties';
		$revenue_type4->revenue_type_description = 'Revenues from Royalties';
		$revenue_type4->save();

		$revenue_type5 = new Revenue_type();
		$revenue_type5->revenuetype = 'Interest Income';
		$revenue_type5->revenue_type_description = 'Non operating income from interest';
		$revenue_type5->save();
	}
}