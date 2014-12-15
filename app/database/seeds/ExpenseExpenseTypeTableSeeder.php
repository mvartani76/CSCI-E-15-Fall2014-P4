<?php
class ExpenseExpenseTypeTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE expense_expense_type');

		# Expense-Expense_Type
		$expense1 = Expense::find(26);
		$expense1->expensetypes()->attach(1);
		$expense1->save();

		$expense2 = Expense::find(27);
		$expense2->expensetypes()->attach(2);
		$expense2->save();

		$expense3 = Expense::find(28);
		$expense3->expensetypes()->attach(3);
		$expense3->save();

		$expense4 = Expense::find(29);
		$expense4->expensetypes()->attach(4);
		$expense4->save();

		$expense5 = Expense::find(30);
		$expense5->expensetypes()->attach(5);
		$expense5->save();

		$expense6 = Expense::find(31);
		$expense6->expensetypes()->attach(1);
		$expense6->save();

		$expense7 = Expense::find(32);
		$expense7->expensetypes()->attach(2);
		$expense7->save();

		$expense8 = Expense::find(33);
		$expense8->expensetypes()->attach(3);
		$expense8->save();

		$expense9 = Expense::find(34);
		$expense9->expensetypes()->attach(4);
		$expense9->save();

		$expense10 = Expense::find(35);
		$expense10->expensetypes()->attach(5);
		$expense10->save();

		$expense11 = Expense::find(36);
		$expense11->expensetypes()->attach(5);
		$expense11->save();

		$expense12 = Expense::find(37);
		$expense12->expensetypes()->attach(6);
		$expense12->save();

		$expense13 = Expense::find(38);
		$expense13->expensetypes()->attach(6);
		$expense13->save();

		$expense14 = Expense::find(39);
		$expense14->expensetypes()->attach(6);
		$expense14->save();

		$expense15 = Expense::find(40);
		$expense15->expensetypes()->attach(6);
		$expense15->save();

		$expense16 = Expense::find(41);
		$expense16->expensetypes()->attach(7);
		$expense16->save();
	}
}