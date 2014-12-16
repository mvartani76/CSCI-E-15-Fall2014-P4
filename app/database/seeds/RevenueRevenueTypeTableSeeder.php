<?php
class RevenueRevenueTypeTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE revenue_revenue_type');

		# Revenue-Revenue_Type
		$revenue1 = Revenue::find(26);
		$revenue1->revenuetypes()->attach(1);
		$revenue1->save();

		$revenue2 = Revenue::find(27);
		$revenue2->revenuetypes()->attach(2);
		$revenue2->save();

		$revenue3 = Revenue::find(28);
		$revenue3->revenuetypes()->attach(3);
		$revenue3->save();

		$revenue4 = Revenue::find(29);
		$revenue4->revenuetypes()->attach(4);
		$revenue4->save();

		$revenue5 = Revenue::find(30);
		$revenue5->revenuetypes()->attach(5);
		$revenue5->save();

		$revenue6 = Revenue::find(31);
		$revenue6->revenuetypes()->attach(1);
		$revenue6->save();

		$revenue7 = Revenue::find(32);
		$revenue7->revenuetypes()->attach(2);
		$revenue7->save();

		$revenue8 = Revenue::find(33);
		$revenue8->revenuetypes()->attach(3);
		$revenue8->save();

		$revenue9 = Revenue::find(34);
		$revenue9->revenuetypes()->attach(4);
		$revenue9->save();

		$revenue10 = Revenue::find(35);
		$revenue10->revenuetypes()->attach(5);
		$revenue10->save();

		$revenue11 = Revenue::find(36);
		$revenue11->revenuetypes()->attach(1);
		$revenue11->save();

		$revenue12 = Revenue::find(37);
		$revenue12->revenuetypes()->attach(2);
		$revenue12->save();

		$revenue13 = Revenue::find(38);
		$revenue13->revenuetypes()->attach(3);
		$revenue13->save();

		$revenue14 = Revenue::find(39);
		$revenue14->revenuetypes()->attach(4);
		$revenue14->save();

		$revenue15 = Revenue::find(40);
		$revenue15->revenuetypes()->attach(5);
		$revenue15->save();

		$revenue16 = Revenue::find(41);
		$revenue16->revenuetypes()->attach(1);
		$revenue16->save();

		$revenue17 = Revenue::find(42);
		$revenue17->revenuetypes()->attach(2);
		$revenue17->save();

		$revenue18 = Revenue::find(43);
		$revenue18->revenuetypes()->attach(3);
		$revenue18->save();

		$revenue19 = Revenue::find(44);
		$revenue19->revenuetypes()->attach(4);
		$revenue19->save();

		$revenue20 = Revenue::find(45);
		$revenue20->revenuetypes()->attach(5);
		$revenue20->save();

		$revenue21 = Revenue::find(46);
		$revenue21->revenuetypes()->attach(1);
		$revenue21->save();

		$revenue22 = Revenue::find(47);
		$revenue22->revenuetypes()->attach(2);
		$revenue22->save();

		$revenue23 = Revenue::find(48);
		$revenue23->revenuetypes()->attach(3);
		$revenue23->save();

		$revenue24 = Revenue::find(49);
		$revenue24->revenuetypes()->attach(4);
		$revenue24->save();

		$revenue25 = Revenue::find(50);
		$revenue25->revenuetypes()->attach(5);
		$revenue25->save();				
	}
}