<?php
class ProjectRevenueTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE project_revenue');

		# Project-Revenue
		$project1 = Project::find(1);
		$project1->revenues()->attach(1);
		$project1->revenues()->attach(2);
		$project1->revenues()->attach(3);
		$project1->revenues()->attach(4);
		$project1->revenues()->attach(5);
		$project1->revenues()->attach(6);
		$project1->revenues()->attach(7);
		$project1->revenues()->attach(8);
		$project1->revenues()->attach(9);
		$project1->revenues()->attach(10);
		$project1->revenues()->attach(11);
		$project1->revenues()->attach(12);
		$project1->revenues()->attach(13);
		$project1->revenues()->attach(14);
		$project1->revenues()->attach(15);
		$project1->revenues()->attach(16);
		$project1->revenues()->attach(17);
		$project1->revenues()->attach(18);
		$project1->revenues()->attach(19);
		$project1->revenues()->attach(20);
		$project1->revenues()->attach(21);
		$project1->revenues()->attach(22);
		$project1->revenues()->attach(23);
		$project1->revenues()->attach(24);
		$project1->revenues()->attach(25);
		$project1->save();


		$project3 = Project::find(3);
		$project3->revenues()->attach(26);
		$project3->revenues()->attach(27);
		$project3->revenues()->attach(28);
		$project3->revenues()->attach(29);
		$project3->revenues()->attach(30);
		$project3->revenues()->attach(31);
		$project3->revenues()->attach(32);
		$project3->revenues()->attach(33);
		$project3->revenues()->attach(34);
		$project3->revenues()->attach(35);
		$project3->revenues()->attach(36);
		$project3->revenues()->attach(37);
		$project3->revenues()->attach(38);
		$project3->revenues()->attach(39);
		$project3->revenues()->attach(40);
		$project3->revenues()->attach(41);
		$project3->revenues()->attach(42);
		$project3->revenues()->attach(43);
		$project3->revenues()->attach(44);
		$project3->revenues()->attach(45);
		$project3->revenues()->attach(46);
		$project3->revenues()->attach(47);
		$project3->revenues()->attach(48);
		$project3->revenues()->attach(49);
		$project3->revenues()->attach(50);
		$project3->save();

		$project4 = Project::find(4);
		$project4->revenues()->attach(1);
		$project4->revenues()->attach(2);
		$project4->revenues()->attach(3);
		$project4->revenues()->attach(4);
		$project4->revenues()->attach(5);
		$project4->save();

		$project5 = Project::find(5);
		$project5->revenues()->attach(6);
		$project5->revenues()->attach(7);
		$project5->revenues()->attach(8);
		$project5->revenues()->attach(9);
		$project5->revenues()->attach(10);
		$project5->save();		

	}
}