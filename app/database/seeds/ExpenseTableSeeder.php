<?php
class ExpenseTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE expenses');

		# Expenses
	    $expense1 = new Expense();
		$expense1->expense_description = 'Proj 1 Cost of the HW products';
		$expense1->amount = 2000;
		$expense1->year = 2014;
		$expense1->save();

		$expense2 = new Expense();
		$expense2->expense_description = 'Proj 1 Selling Expenses';
		$expense2->amount = 2000;
		$expense2->year = 2014;
		$expense2->save();

		$expense3 = new Expense();
		$expense3->expense_description = 'Proj 1 Salary Expense';
		$expense3->amount = 2000;
		$expense3->year = 2014;
		$expense3->save();

		$expense4 = new Expense();
		$expense4->expense_description = 'Proj 1 Travel Expense';
		$expense4->amount = 2000;
		$expense4->year = 2014;
		$expense4->save();

		$expense5 = new Expense();
		$expense5->expense_description = 'Proj 1 Rent Expense';
		$expense5->amount = 2000;
		$expense5->year = 2014;
		$expense5->save();

	    $expense6 = new Expense();
		$expense6->expense_description = 'Proj 1 Cost of the HW products';
		$expense6->amount = 3000;
		$expense6->year = 2015;
		$expense6->save();

		$expense7 = new Expense();
		$expense7->expense_description = 'Proj 1 Selling Expenses';
		$expense7->amount = 3000;
		$expense7->year = 2015;
		$expense7->save();

		$expense8 = new Expense();
		$expense8->expense_description = 'Proj 1 Salary Expense';
		$expense8->amount = 3000;
		$expense8->year = 2015;
		$expense8->save();

		$expense9 = new Expense();
		$expense9->expense_description = 'Proj 1 Travel Expense';
		$expense9->amount = 3000;
		$expense9->year = 2015;
		$expense9->save();

		$expense10 = new Expense();
		$expense10->expense_description = 'Proj 1 Rent Expense';
		$expense10->amount = 3000;
		$expense10->year = 2015;
		$expense10->save();

	    $expense11 = new Expense();
		$expense11->expense_description = 'Proj 1 Cost of the HW products';
		$expense11->amount = 4000;
		$expense11->year = 2016;
		$expense11->save();

		$expense12 = new Expense();
		$expense12->expense_description = 'Proj 1 Selling Expenses';
		$expense12->amount = 4000;
		$expense12->year = 2016;
		$expense12->save();

		$expense13 = new Expense();
		$expense13->expense_description = 'Proj 1 Salary Expense';
		$expense13->amount = 4000;
		$expense13->year = 2016;
		$expense13->save();

		$expense14 = new Expense();
		$expense14->expense_description = 'Proj 1 Travel Expense';
		$expense14->amount = 4000;
		$expense14->year = 2016;
		$expense14->save();

		$expense15 = new Expense();
		$expense15->expense_description = 'Proj 1 Rent Expense';
		$expense15->amount = 4000;
		$expense15->year = 2016;
		$expense15->save();

	    $expense16 = new Expense();
		$expense16->expense_description = 'Proj 1 Cost of the HW products';
		$expense16->amount = 5000;
		$expense16->year = 2017;
		$expense16->save();

		$expense17 = new Expense();
		$expense17->expense_description = 'Proj 1 Selling Expenses';
		$expense17->amount = 5000;
		$expense17->year = 2017;
		$expense17->save();

		$expense18 = new Expense();
		$expense18->expense_description = 'Proj 1 Salary Expense';
		$expense18->amount = 5000;
		$expense18->year = 2017;
		$expense18->save();

		$expense19 = new Expense();
		$expense19->expense_description = 'Proj 1 Travel Expense';
		$expense19->amount = 5000;
		$expense19->year = 2017;
		$expense19->save();

		$expense20 = new Expense();
		$expense20->expense_description = 'Proj 1 Rent Expense';
		$expense20->amount = 5000;
		$expense20->year = 2017;
		$expense20->save();

	    $expense21 = new Expense();
		$expense21->expense_description = 'Proj 1 Cost of the HW products';
		$expense21->amount = 6000;
		$expense21->year = 2018;
		$expense21->save();

		$expense22 = new Expense();
		$expense22->expense_description = 'Proj 1 Selling Expenses';
		$expense22->amount = 6000;
		$expense22->year = 2018;
		$expense22->save();

		$expense23 = new Expense();
		$expense23->expense_description = 'Proj 1 Salary Expense';
		$expense23->amount = 60000;
		$expense23->year = 2018;
		$expense23->save();

		$expense24 = new Expense();
		$expense24->expense_description = 'Proj 1 Travel Expense';
		$expense24->amount = 6000;
		$expense24->year = 2018;
		$expense24->save();

		$expense25 = new Expense();
		$expense25->expense_description = 'Proj 1 Rent Expense';
		$expense25->amount = 6000;
		$expense25->year = 2018;
		$expense25->save();

	    $expense26 = new Expense();
		$expense26->expense_description = 'Proj 3 Cost of the HW products';
		$expense26->amount = 7000;
		$expense26->year = 2019;
		$expense26->save();

		$expense27 = new Expense();
		$expense27->expense_description = 'Proj 3 Selling Expenses';
		$expense27->amount = 7000;
		$expense27->year = 2019;
		$expense27->save();

		$expense28 = new Expense();
		$expense28->expense_description = 'Proj 3 Salary Expense';
		$expense28->amount = 7000;
		$expense28->year = 2019;
		$expense28->save();

		$expense29 = new Expense();
		$expense29->expense_description = 'Proj 3 Travel Expense';
		$expense29->amount = 7000;
		$expense29->year = 2019;
		$expense29->save();

		$expense30 = new Expense();
		$expense30->expense_description = 'Proj 3 Rent Expense';
		$expense30->amount = 7000;
		$expense30->year = 2019;
		$expense30->save();

	    $expense31 = new Expense();
		$expense31->expense_description = 'Proj 3 Cost of the HW products';
		$expense31->amount = 8000;
		$expense31->year = 2020;
		$expense31->save();

		$expense32 = new Expense();
		$expense32->expense_description = 'Proj 3 Selling Expenses';
		$expense32->amount = 8000;
		$expense32->year = 2020;
		$expense32->save();

		$expense33 = new Expense();
		$expense33->expense_description = 'Proj 3 Salary Expense';
		$expense33->amount = 8000;
		$expense33->year = 2020;
		$expense33->save();

		$expense34 = new Expense();
		$expense34->expense_description = 'Proj 3 Travel Expense';
		$expense34->amount = 8000;
		$expense34->year = 2020;
		$expense34->save();

		$expense35 = new Expense();
		$expense35->expense_description = 'Proj 3 Rent Expense';
		$expense35->amount = 8000;
		$expense35->year = 2020;
		$expense35->save();

	    $expense36 = new Expense();
		$expense36->expense_description = 'Proj 3 Cost of the HW products';
		$expense36->amount = 8000;
		$expense36->year = 2020;
		$expense36->save();

		$expense37 = new Expense();
		$expense37->expense_description = 'Proj 3 Selling Expenses';
		$expense37->amount = 8000;
		$expense37->year = 2020;
		$expense37->save();

		$expense38 = new Expense();
		$expense38->expense_description = 'Proj 3 Salary Expense';
		$expense38->amount = 8000;
		$expense38->year = 2020;
		$expense38->save();

		$expense39 = new Expense();
		$expense39->expense_description = 'Proj 3 Travel Expense';
		$expense39->amount = 8000;
		$expense39->year = 2020;
		$expense39->save();

		$expense40 = new Expense();
		$expense40->expense_description = 'Proj 3 Rent Expense';
		$expense40->amount = 8000;
		$expense40->year = 2020;
		$expense40->save();

	    $expense41 = new Expense();
		$expense41->expense_description = 'Proj 3 Cost of the HW products';
		$expense41->amount = 9000;
		$expense41->year = 2021;
		$expense41->save();

		$expense42 = new Expense();
		$expense42->expense_description = 'Proj 3 Selling Expenses';
		$expense42->amount = 9000;
		$expense42->year = 2021;
		$expense42->save();

		$expense43 = new Expense();
		$expense43->expense_description = 'Proj 3 Salary Expense';
		$expense43->amount = 9000;
		$expense43->year = 2021;
		$expense43->save();

		$expense44 = new Expense();
		$expense44->expense_description = 'Proj 3 Travel Expense';
		$expense44->amount = 9000;
		$expense44->year = 2021;
		$expense44->save();

		$expense45 = new Expense();
		$expense45->expense_description = 'Proj 3 Rent Expense';
		$expense45->amount = 9000;
		$expense45->year = 2021;
		$expense45->save();

	    $expense46 = new Expense();
		$expense46->expense_description = 'Proj 3 Cost of the HW products';
		$expense46->amount = 10000;
		$expense46->year = 2022;
		$expense46->save();

		$expense47 = new Expense();
		$expense47->expense_description = 'Proj 3 Selling Expenses';
		$expense47->amount = 10000;
		$expense47->year = 2022;
		$expense47->save();

		$expense48 = new Expense();
		$expense48->expense_description = 'Proj 3 Salary Expense';
		$expense48->amount = 10000;
		$expense48->year = 2022;
		$expense48->save();

		$expense49 = new Expense();
		$expense49->expense_description = 'Proj 3 Travel Expense';
		$expense49->amount = 10000;
		$expense49->year = 2022;
		$expense49->save();

		$expense50 = new Expense();
		$expense50->expense_description = 'Proj 3 Rent Expense';
		$expense50->amount = 10000;
		$expense50->year = 2022;
		$expense50->save();		
	}
}