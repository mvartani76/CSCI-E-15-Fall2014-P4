<?php
class ExpenseProjectTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE expense_project');

		# Project-Revenue
		$project1 = Project::find(1);
		$project1->expenses()->attach(1);
		$project1->expenses()->attach(2);
		$project1->expenses()->attach(3);
		$project1->expenses()->attach(4);
		$project1->expenses()->attach(5);
		$project1->save();

		$project2 = Project::find(2);
		$project1->expenses()->attach(6);
		$project1->expenses()->attach(7);
		$project1->expenses()->attach(8);
		$project1->expenses()->attach(9);
		$project1->expenses()->attach(10);
		$project2->save();

		$project3 = Project::find(3);
		$project1->expenses()->attach(11);
		$project1->expenses()->attach(12);
		$project1->expenses()->attach(13);
		$project1->expenses()->attach(14);
		$project1->expenses()->attach(15);
		$project3->save();

		$project4 = Project::find(4);
		$project1->expenses()->attach(1);
		$project1->expenses()->attach(2);
		$project1->expenses()->attach(3);
		$project1->expenses()->attach(4);
		$project1->expenses()->attach(5);
		$project4->save();

		$project5 = Project::find(5);
		$project1->expenses()->attach(6);
		$project1->expenses()->attach(7);
		$project1->expenses()->attach(8);
		$project1->expenses()->attach(9);
		$project1->expenses()->attach(10);
		$project5->save();		

	}
}