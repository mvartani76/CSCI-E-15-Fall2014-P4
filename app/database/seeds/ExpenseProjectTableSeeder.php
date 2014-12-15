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
		$project1->expenses()->attach(6);
		$project1->expenses()->attach(7);
		$project1->expenses()->attach(8);
		$project1->expenses()->attach(9);
		$project1->expenses()->attach(10);
		$project1->expenses()->attach(11);
		$project1->expenses()->attach(12);
		$project1->expenses()->attach(13);
		$project1->expenses()->attach(14);
		$project1->expenses()->attach(15);
		$project1->expenses()->attach(16);
		$project1->expenses()->attach(17);
		$project1->expenses()->attach(18);
		$project1->expenses()->attach(19);
		$project1->expenses()->attach(20);
		$project1->expenses()->attach(21);
		$project1->expenses()->attach(22);
		$project1->expenses()->attach(23);
		$project1->expenses()->attach(24);
		$project1->expenses()->attach(25);
		$project1->save();


		$project3 = Project::find(3);
		$project3->expenses()->attach(26);
		$project3->expenses()->attach(27);
		$project3->expenses()->attach(28);
		$project3->expenses()->attach(29);
		$project3->expenses()->attach(30);
		$project3->expenses()->attach(31);
		$project3->expenses()->attach(32);
		$project3->expenses()->attach(33);
		$project3->expenses()->attach(34);
		$project3->expenses()->attach(35);
		$project3->expenses()->attach(36);
		$project3->expenses()->attach(37);
		$project3->expenses()->attach(38);
		$project3->expenses()->attach(39);
		$project3->expenses()->attach(40);
		$project3->expenses()->attach(41);
		$project3->expenses()->attach(42);
		$project3->expenses()->attach(43);
		$project3->expenses()->attach(44);
		$project3->expenses()->attach(45);
		$project3->expenses()->attach(46);
		$project3->expenses()->attach(47);
		$project3->expenses()->attach(48);
		$project3->expenses()->attach(49);
		$project3->expenses()->attach(50);
		$project3->save();

		$project4 = Project::find(4);
		$project4->expenses()->attach(1);
		$project4->expenses()->attach(2);
		$project4->expenses()->attach(3);
		$project4->expenses()->attach(4);
		$project4->expenses()->attach(5);
		$project4->save();

		$project5 = Project::find(5);
		$project5->expenses()->attach(6);
		$project5->expenses()->attach(7);
		$project5->expenses()->attach(8);
		$project5->expenses()->attach(9);
		$project5->expenses()->attach(10);
		$project5->save();		
		

	}
}