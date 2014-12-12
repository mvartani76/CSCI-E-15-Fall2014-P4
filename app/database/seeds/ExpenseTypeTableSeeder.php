<?php
class ExpenseTypeTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE expense_types');

		# Expense_types
	    $expense_type1 = new Expense_type();
		$expense_type1->expense_type = 'COGS';
		$expense_type1->expense_type_description = 'Cost of the products purchased or manufactured and sold by a business';
		$expense_type1->save();

		$expense_type2 = new Expense_type();
		$expense_type2->expense_type = 'Selling Expense';
		$expense_type2->expense_type_description = 'Expenses incurred and related to making sales';
		$expense_type2->save();

		$expense_type3 = new Expense_type();
		$expense_type3->expense_type = 'Salary Expense';
		$expense_type3->expense_type_description = 'Salary expense includes incentives, commissions, bonuses, and severance pay';
		$expense_type3->save();

		$expense_type4 = new Expense_type();
		$expense_type4->expense_type = 'Travel Expense';
		$expense_type4->expense_type_description = 'Includes local and overnight travel';
		$expense_type4->save();

		$expense_type5 = new Expense_type();
		$expense_type5->expense_type = 'Rent Expense';
		$expense_type5->expense_type_description = 'Includes land, buildings, equipment, vehicles, other';
		$expense_type5->save();
	}
}