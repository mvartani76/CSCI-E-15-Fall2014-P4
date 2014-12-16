<?php
class ExpenseTypeTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE expense_types');

		# Expense_types
	    $expensetype1 = new Expense_type();
		$expensetype1->expensetype = 'COGS';
		$expensetype1->expense_type_description = 'Cost of the products purchased or manufactured and sold by a business';
		$expensetype1->save();

		$expensetype2 = new Expense_type();
		$expensetype2->expensetype = 'Selling Expense';
		$expensetype2->expense_type_description = 'Expenses incurred and related to making sales';
		$expensetype2->save();

		$expensetype3 = new Expense_type();
		$expensetype3->expensetype = 'Salary Expense';
		$expensetype3->expense_type_description = 'Salary expense includes incentives, commissions, bonuses, and severance pay';
		$expensetype3->save();

		$expensetype4 = new Expense_type();
		$expensetype4->expensetype = 'Travel Expense';
		$expensetype4->expense_type_description = 'Includes local and overnight travel';
		$expensetype4->save();

		$expensetype5 = new Expense_type();
		$expensetype5->expensetype = 'Rent Expense';
		$expensetype5->expense_type_description = 'Includes land, buildings, equipment, vehicles, other';
		$expensetype5->save();
	}
}