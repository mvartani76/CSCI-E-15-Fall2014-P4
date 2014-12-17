<?php
class RevenueRevenueTypeTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE revenue_revenue_type');

		# Revenue-Revenue_Type
		$revenue1 = Revenue::find(1);
		$revenue1->revenuetypes()->attach(1);
		$revenue1->save();

		$revenue2 = Revenue::find(2);
		$revenue2->revenuetypes()->attach(2);
		$revenue2->save();

		$revenue3 = Revenue::find(3);
		$revenue3->revenuetypes()->attach(3);
		$revenue3->save();

		$revenue4 = Revenue::find(4);
		$revenue4->revenuetypes()->attach(4);
		$revenue4->save();

		$revenue5 = Revenue::find(5);
		$revenue5->revenuetypes()->attach(5);
		$revenue5->save();

		$revenue6 = Revenue::find(6);
		$revenue6->revenuetypes()->attach(1);
		$revenue6->save();

		$revenue7 = Revenue::find(7);
		$revenue7->revenuetypes()->attach(2);
		$revenue7->save();

		$revenue8 = Revenue::find(8);
		$revenue8->revenuetypes()->attach(3);
		$revenue8->save();

		$revenue9 = Revenue::find(9);
		$revenue9->revenuetypes()->attach(4);
		$revenue9->save();

		$revenue10 = Revenue::find(10);
		$revenue10->revenuetypes()->attach(5);
		$revenue10->save();

		$revenue11 = Revenue::find(11);
		$revenue11->revenuetypes()->attach(1);
		$revenue11->save();

		$revenue12 = Revenue::find(12);
		$revenue12->revenuetypes()->attach(2);
		$revenue12->save();

		$revenue13 = Revenue::find(13);
		$revenue13->revenuetypes()->attach(3);
		$revenue13->save();

		$revenue14 = Revenue::find(14);
		$revenue14->revenuetypes()->attach(4);
		$revenue14->save();

		$revenue15 = Revenue::find(15);
		$revenue15->revenuetypes()->attach(5);
		$revenue15->save();

		$revenue16 = Revenue::find(16);
		$revenue16->revenuetypes()->attach(1);
		$revenue16->save();

		$revenue17 = Revenue::find(17);
		$revenue17->revenuetypes()->attach(2);
		$revenue17->save();

		$revenue18 = Revenue::find(18);
		$revenue18->revenuetypes()->attach(3);
		$revenue18->save();

		$revenue19 = Revenue::find(19);
		$revenue19->revenuetypes()->attach(4);
		$revenue19->save();

		$revenue20 = Revenue::find(20);
		$revenue20->revenuetypes()->attach(5);
		$revenue20->save();

		$revenue21 = Revenue::find(21);
		$revenue21->revenuetypes()->attach(1);
		$revenue21->save();

		$revenue22 = Revenue::find(22);
		$revenue22->revenuetypes()->attach(2);
		$revenue22->save();

		$revenue23 = Revenue::find(23);
		$revenue23->revenuetypes()->attach(3);
		$revenue23->save();

		$revenue24 = Revenue::find(24);
		$revenue24->revenuetypes()->attach(4);
		$revenue24->save();

		$revenue25 = Revenue::find(25);
		$revenue25->revenuetypes()->attach(5);
		$revenue25->save();

		$revenue26 = Revenue::find(26);
		$revenue26->revenuetypes()->attach(1);
		$revenue26->save();

		$revenue27 = Revenue::find(27);
		$revenue27->revenuetypes()->attach(2);
		$revenue27->save();

		$revenue28 = Revenue::find(28);
		$revenue28->revenuetypes()->attach(3);
		$revenue28->save();

		$revenue29 = Revenue::find(29);
		$revenue29->revenuetypes()->attach(4);
		$revenue29->save();

		$revenue30 = Revenue::find(30);
		$revenue30->revenuetypes()->attach(5);
		$revenue30->save();

		$revenue31 = Revenue::find(31);
		$revenue31->revenuetypes()->attach(1);
		$revenue31->save();

		$revenue32 = Revenue::find(32);
		$revenue32->revenuetypes()->attach(2);
		$revenue32->save();

		$revenue33 = Revenue::find(33);
		$revenue33->revenuetypes()->attach(3);
		$revenue33->save();

		$revenue34 = Revenue::find(34);
		$revenue34->revenuetypes()->attach(4);
		$revenue34->save();

		$revenue35 = Revenue::find(35);
		$revenue35->revenuetypes()->attach(5);
		$revenue35->save();

		$revenue36 = Revenue::find(36);
		$revenue36->revenuetypes()->attach(1);
		$revenue36->save();

		$revenue37 = Revenue::find(37);
		$revenue37->revenuetypes()->attach(2);
		$revenue37->save();

		$revenue38 = Revenue::find(38);
		$revenue38->revenuetypes()->attach(3);
		$revenue38->save();

		$revenue39 = Revenue::find(39);
		$revenue39->revenuetypes()->attach(4);
		$revenue39->save();

		$revenue40 = Revenue::find(40);
		$revenue40->revenuetypes()->attach(5);
		$revenue40->save();

		$revenue41 = Revenue::find(41);
		$revenue41->revenuetypes()->attach(1);
		$revenue41->save();

		$revenue42 = Revenue::find(42);
		$revenue42->revenuetypes()->attach(2);
		$revenue42->save();

		$revenue43 = Revenue::find(43);
		$revenue43->revenuetypes()->attach(3);
		$revenue43->save();

		$revenue44 = Revenue::find(44);
		$revenue44->revenuetypes()->attach(4);
		$revenue44->save();

		$revenue45 = Revenue::find(45);
		$revenue45->revenuetypes()->attach(5);
		$revenue45->save();

		$revenue46 = Revenue::find(46);
		$revenue46->revenuetypes()->attach(1);
		$revenue46->save();

		$revenue47 = Revenue::find(47);
		$revenue47->revenuetypes()->attach(2);
		$revenue47->save();

		$revenue48 = Revenue::find(48);
		$revenue48->revenuetypes()->attach(3);
		$revenue48->save();

		$revenue49 = Revenue::find(49);
		$revenue49->revenuetypes()->attach(4);
		$revenue49->save();

		$revenue50 = Revenue::find(50);
		$revenue50->revenuetypes()->attach(5);
		$revenue50->save();				
	}
}