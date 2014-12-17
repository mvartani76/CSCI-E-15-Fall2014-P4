<?php
class ExpenseExpenseTypeTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE expense_expense_type');

		# Expense-Expense_Type
		$expense1 = Expense::find(1);
		$expense1->expensetypes()->attach(1);
		$expense1->save();

		$expense2 = Expense::find(2);
		$expense2->expensetypes()->attach(2);
		$expense2->save();

		$expense3 = Expense::find(3);
		$expense3->expensetypes()->attach(3);
		$expense3->save();

		$expense4 = Expense::find(4);
		$expense4->expensetypes()->attach(4);
		$expense4->save();

		$expense5 = Expense::find(5);
		$expense5->expensetypes()->attach(5);
		$expense5->save();

		$expense6 = Expense::find(6);
		$expense6->expensetypes()->attach(1);
		$expense6->save();

		$expense7 = Expense::find(7);
		$expense7->expensetypes()->attach(2);
		$expense7->save();

		$expense8 = Expense::find(8);
		$expense8->expensetypes()->attach(3);
		$expense8->save();

		$expense9 = Expense::find(9);
		$expense9->expensetypes()->attach(4);
		$expense9->save();

		$expense10 = Expense::find(10);
		$expense10->expensetypes()->attach(5);
		$expense10->save();

		$expense11 = Expense::find(11);
		$expense11->expensetypes()->attach(1);
		$expense11->save();

		$expense12 = Expense::find(12);
		$expense12->expensetypes()->attach(2);
		$expense12->save();

		$expense13 = Expense::find(13);
		$expense13->expensetypes()->attach(3);
		$expense13->save();

		$expense14 = Expense::find(14);
		$expense14->expensetypes()->attach(4);
		$expense14->save();

		$expense15 = Expense::find(15);
		$expense15->expensetypes()->attach(5);
		$expense15->save();

		$expense16 = Expense::find(16);
		$expense16->expensetypes()->attach(1);
		$expense16->save();

		$expense17 = Expense::find(17);
		$expense17->expensetypes()->attach(2);
		$expense17->save();

		$expense18 = Expense::find(18);
		$expense18->expensetypes()->attach(3);
		$expense18->save();

		$expense19 = Expense::find(19);
		$expense19->expensetypes()->attach(4);
		$expense19->save();

		$expense20 = Expense::find(20);
		$expense20->expensetypes()->attach(5);
		$expense20->save();

		$expense21 = Expense::find(21);
		$expense21->expensetypes()->attach(1);
		$expense21->save();

		$expense22 = Expense::find(22);
		$expense22->expensetypes()->attach(2);
		$expense22->save();

		$expense23 = Expense::find(23);
		$expense23->expensetypes()->attach(3);
		$expense23->save();

		$expense24 = Expense::find(24);
		$expense24->expensetypes()->attach(4);
		$expense24->save();

		$expense25 = Expense::find(25);
		$expense25->expensetypes()->attach(5);
		$expense25->save();

		$expense26 = Expense::find(26);
		$expense26->expensetypes()->attach(1);
		$expense26->save();

		$expense27 = Expense::find(27);
		$expense27->expensetypes()->attach(2);
		$expense27->save();

		$expense28 = Expense::find(28);
		$expense28->expensetypes()->attach(3);
		$expense28->save();

		$expense29 = Expense::find(29);
		$expense29->expensetypes()->attach(4);
		$expense29->save();

		$expense30 = Expense::find(30);
		$expense30->expensetypes()->attach(5);
		$expense30->save();

		$expense31 = Expense::find(31);
		$expense31->expensetypes()->attach(1);
		$expense31->save();

		$expense32 = Expense::find(32);
		$expense32->expensetypes()->attach(2);
		$expense32->save();

		$expense33 = Expense::find(33);
		$expense33->expensetypes()->attach(3);
		$expense33->save();

		$expense34 = Expense::find(34);
		$expense34->expensetypes()->attach(4);
		$expense34->save();

		$expense35 = Expense::find(35);
		$expense35->expensetypes()->attach(5);
		$expense35->save();

		$expense36 = Expense::find(36);
		$expense36->expensetypes()->attach(1);
		$expense36->save();

		$expense37 = Expense::find(37);
		$expense37->expensetypes()->attach(2);
		$expense37->save();

		$expense38 = Expense::find(38);
		$expense38->expensetypes()->attach(3);
		$expense38->save();

		$expense39 = Expense::find(39);
		$expense39->expensetypes()->attach(4);
		$expense39->save();

		$expense40 = Expense::find(40);
		$expense40->expensetypes()->attach(5);
		$expense40->save();

		$expense41 = Expense::find(41);
		$expense41->expensetypes()->attach(1);
		$expense41->save();

		$expense42 = Expense::find(42);
		$expense42->expensetypes()->attach(2);
		$expense42->save();

		$expense43 = Expense::find(43);
		$expense43->expensetypes()->attach(3);
		$expense43->save();

		$expense44 = Expense::find(44);
		$expense44->expensetypes()->attach(4);
		$expense44->save();

		$expense45 = Expense::find(45);
		$expense45->expensetypes()->attach(5);
		$expense45->save();

		$expense46 = Expense::find(46);
		$expense46->expensetypes()->attach(1);
		$expense46->save();

		$expense47 = Expense::find(47);
		$expense47->expensetypes()->attach(2);
		$expense47->save();

		$expense48 = Expense::find(48);
		$expense48->expensetypes()->attach(3);
		$expense48->save();

		$expense49 = Expense::find(49);
		$expense49->expensetypes()->attach(4);
		$expense49->save();

		$expense50 = Expense::find(50);
		$expense50->expensetypes()->attach(5);
		$expense50->save();				
	}
}