<?php
class RevenueTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE revenues');

		# Revenue_types
	    $revenue1 = new Revenue();
		$revenue1->revenue_description = 'Revenues from HW products';
		$revenue1->amount = 20000;
		$revenue1->year = 2014;
		$revenue1->save();

		$revenue2 = new Revenue();
		$revenue2->revenue_description = 'Revenues from SW products';
		$revenue2->amount = 20000;
		$revenue2->year = 2014;
		$revenue2->save();

		$revenue3 = new Revenue();
		$revenue3->revenue_description = 'Revenues from Licensing';
		$revenue3->amount = 20000;
		$revenue3->year = 2014;
		$revenue3->save();

		$revenue4 = new Revenue();
		$revenue4->revenue_description = 'Revenues from Royalties';
		$revenue4->amount = 20000;
		$revenue4->year = 2014;
		$revenue4->save();

		$revenue5 = new Revenue();
		$revenue5->revenue_description = 'Non operating income from interest';
		$revenue5->amount = 20000;
		$revenue5->year = 2014;
		$revenue5->save();

	    $revenue6 = new Revenue();
		$revenue6->revenue_description = 'Revenues from HW products';
		$revenue6->amount = 30000;
		$revenue6->year = 2015;
		$revenue6->save();

		$revenue7 = new Revenue();
		$revenue7->revenue_description = 'Revenues from SW products';
		$revenue7->amount = 30000;
		$revenue7->year = 2015;
		$revenue7->save();

		$revenue8 = new Revenue();
		$revenue8->revenue_description = 'Revenues from Licensing';
		$revenue8->amount = 30000;
		$revenue8->year = 2015;
		$revenue8->save();

		$revenue9 = new Revenue();
		$revenue9->revenue_description = 'Revenues from Royalties';
		$revenue9->amount = 30000;
		$revenue9->year = 2015;
		$revenue9->save();

		$revenue10 = new Revenue();
		$revenue10->revenue_description = 'Non operating income from interest';
		$revenue10->amount = 30000;
		$revenue10->year = 2015;
		$revenue10->save();

	    $revenue11 = new Revenue();
		$revenue11->revenue_description = 'Revenues from HW products';
		$revenue11->amount = 40000;
		$revenue11->year = 2016;
		$revenue11->save();

		$revenue12 = new Revenue();
		$revenue12->revenue_description = 'Revenues from SW products';
		$revenue12->amount = 40000;
		$revenue12->year = 2016;
		$revenue12->save();

		$revenue13 = new Revenue();
		$revenue13->revenue_description = 'Revenues from Licensing';
		$revenue13->amount = 40000;
		$revenue13->year = 2016;
		$revenue13->save();

		$revenue14 = new Revenue();
		$revenue14->revenue_description = 'Revenues from Royalties';
		$revenue14->amount = 40000;
		$revenue14->year = 2016;
		$revenue14->save();

		$revenue15 = new Revenue();
		$revenue15->revenue_description = 'Non operating income from interest';
		$revenue15->amount = 40000;
		$revenue15->year = 2016;
		$revenue15->save();

	    $revenue16 = new Revenue();
		$revenue16->revenue_description = 'Revenues from HW products';
		$revenue16->amount = 50000;
		$revenue16->year = 2017;
		$revenue16->save();

		$revenue17 = new Revenue();
		$revenue17->revenue_description = 'Revenues from SW products';
		$revenue17->amount = 50000;
		$revenue17->year = 2017;
		$revenue17->save();

		$revenue18 = new Revenue();
		$revenue18->revenue_description = 'Revenues from Licensing';
		$revenue18->amount = 50000;
		$revenue18->year = 2017;
		$revenue18->save();

		$revenue19 = new Revenue();
		$revenue19->revenue_description = 'Revenues from Royalties';
		$revenue19->amount = 50000;
		$revenue19->year = 2017;
		$revenue19->save();

		$revenue20 = new Revenue();
		$revenue20->revenue_description = 'Non operating income from interest';
		$revenue20->amount = 50000;
		$revenue20->year = 2017;
		$revenue20->save();

	    $revenue21 = new Revenue();
		$revenue21->revenue_description = 'Revenues from HW products';
		$revenue21->amount = 60000;
		$revenue21->year = 2018;
		$revenue21->save();

		$revenue22 = new Revenue();
		$revenue22->revenue_description = 'Revenues from SW products';
		$revenue22->amount = 60000;
		$revenue22->year = 2018;
		$revenue22->save();

		$revenue23 = new Revenue();
		$revenue23->revenue_description = 'Revenues from Licensing';
		$revenue23->amount = 60000;
		$revenue23->year = 2018;
		$revenue23->save();

		$revenue24 = new Revenue();
		$revenue24->revenue_description = 'Revenues from Royalties';
		$revenue24->amount = 60000;
		$revenue24->year = 2018;
		$revenue24->save();

		$revenue25 = new Revenue();
		$revenue25->revenue_description = 'Non operating income from interest';
		$revenue25->amount = 60000;
		$revenue25->year = 2018;
		$revenue25->save();

	    $revenue26 = new Revenue();
		$revenue26->revenue_description = 'Revenues from HW products';
		$revenue26->amount = 70000;
		$revenue26->year = 2019;
		$revenue26->save();

		$revenue27 = new Revenue();
		$revenue27->revenue_description = 'Revenues from SW products';
		$revenue27->amount = 70000;
		$revenue27->year = 2019;
		$revenue27->save();

		$revenue28 = new Revenue();
		$revenue28->revenue_description = 'Revenues from Licensing';
		$revenue28->amount = 70000;
		$revenue28->year = 2019;
		$revenue28->save();

		$revenue29 = new Revenue();
		$revenue29->revenue_description = 'Revenues from Royalties';
		$revenue29->amount = 70000;
		$revenue29->year = 2019;
		$revenue29->save();

		$revenue30 = new Revenue();
		$revenue30->revenue_description = 'Non operating income from interest';
		$revenue30->amount = 70000;
		$revenue30->year = 2019;
		$revenue30->save();

	    $revenue31 = new Revenue();
		$revenue31->revenue_description = 'Revenues from HW products';
		$revenue31->amount = 80000;
		$revenue31->year = 2020;
		$revenue31->save();

		$revenue32 = new Revenue();
		$revenue32->revenue_description = 'Revenues from SW products';
		$revenue32->amount = 80000;
		$revenue32->year = 2020;
		$revenue32->save();

		$revenue33 = new Revenue();
		$revenue33->revenue_description = 'Revenues from Licensing';
		$revenue33->amount = 80000;
		$revenue33->year = 2020;
		$revenue33->save();

		$revenue34 = new Revenue();
		$revenue34->revenue_description = 'Revenues from Royalties';
		$revenue34->amount = 80000;
		$revenue34->year = 2020;
		$revenue34->save();

		$revenue35 = new Revenue();
		$revenue35->revenue_description = 'Non operating income from interest';
		$revenue35->amount = 80000;
		$revenue35->year = 2020;
		$revenue35->save();

	    $revenue36 = new Revenue();
		$revenue36->revenue_description = 'Revenues from HW products';
		$revenue36->amount = 80000;
		$revenue36->year = 2020;
		$revenue36->save();

		$revenue37 = new Revenue();
		$revenue37->revenue_description = 'Revenues from SW products';
		$revenue37->amount = 80000;
		$revenue37->year = 2020;
		$revenue37->save();

		$revenue38 = new Revenue();
		$revenue38->revenue_description = 'Revenues from Licensing';
		$revenue38->amount = 80000;
		$revenue38->year = 2020;
		$revenue38->save();

		$revenue39 = new Revenue();
		$revenue39->revenue_description = 'Revenues from Royalties';
		$revenue39->amount = 80000;
		$revenue39->year = 2020;
		$revenue39->save();

		$revenue40 = new Revenue();
		$revenue40->revenue_description = 'Non operating income from interest';
		$revenue40->amount = 80000;
		$revenue40->year = 2020;
		$revenue40->save();

	    $revenue41 = new Revenue();
		$revenue41->revenue_description = 'Revenues from HW products';
		$revenue41->amount = 90000;
		$revenue41->year = 2021;
		$revenue41->save();

		$revenue42 = new Revenue();
		$revenue42->revenue_description = 'Revenues from SW products';
		$revenue42->amount = 90000;
		$revenue42->year = 2021;
		$revenue42->save();

		$revenue43 = new Revenue();
		$revenue43->revenue_description = 'Revenues from Licensing';
		$revenue43->amount = 90000;
		$revenue43->year = 2021;
		$revenue43->save();

		$revenue44 = new Revenue();
		$revenue44->revenue_description = 'Revenues from Royalties';
		$revenue44->amount = 90000;
		$revenue44->year = 2021;
		$revenue44->save();

		$revenue45 = new Revenue();
		$revenue45->revenue_description = 'Non operating income from interest';
		$revenue45->amount = 90000;
		$revenue45->year = 2021;
		$revenue45->save();

	    $revenue46 = new Revenue();
		$revenue46->revenue_description = 'Revenues from HW products';
		$revenue46->amount = 100000;
		$revenue46->year = 2022;
		$revenue46->save();

		$revenue47 = new Revenue();
		$revenue47->revenue_description = 'Revenues from SW products';
		$revenue47->amount = 100000;
		$revenue47->year = 2022;
		$revenue47->save();

		$revenue48 = new Revenue();
		$revenue48->revenue_description = 'Revenues from Licensing';
		$revenue48->amount = 100000;
		$revenue48->year = 2022;
		$revenue48->save();

		$revenue49 = new Revenue();
		$revenue49->revenue_description = 'Revenues from Royalties';
		$revenue49->amount = 100000;
		$revenue49->year = 2022;
		$revenue49->save();

		$revenue50 = new Revenue();
		$revenue50->revenue_description = 'Revenues from Royalties';
		$revenue50->amount = 100000;
		$revenue50->year = 2022;
		$revenue50->save();		
	}
}