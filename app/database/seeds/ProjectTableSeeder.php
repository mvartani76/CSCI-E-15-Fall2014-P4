<?php
class ProjectTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE projects');

		# Revenue_types
	    $project1 = new Project();
		$project1->project_name = 'Project 1';
		$project1->project_description = 'Project 1 Description';
		$project1->start_year = 2014;
		$project1->end_year = 2018;
		$project1->tax_rate = 21;
		$project1->discount_rate = 11.1;
		$project1->terminal_growth_rate = 1;
		$project1->terminal_rd = 21;
		$project1->terminal_sga = 11;
		$project1->capex_percentage = 1.5;
		$project1->save();

		$project2 = new Project();
		$project2->project_name = 'Project 2';
		$project2->project_description = 'Project 2 Description';
		$project2->start_year = 2015;
		$project2->end_year = 2019;
		$project2->tax_rate = 22;
		$project2->discount_rate = 11.2;
		$project2->terminal_growth_rate = 2;
		$project2->terminal_rd = 22;
		$project2->terminal_sga = 12;
		$project2->capex_percentage = 2.5;
		$project2->save();

		$project3 = new Project();
		$project3->project_name = 'Project 3';
		$project3->project_description = 'Project 3 Description';
		$project3->start_year = 2016;
		$project3->end_year = 2020;
		$project3->tax_rate = 23;
		$project3->discount_rate = 11.3;
		$project3->terminal_growth_rate = 3;
		$project3->terminal_rd = 23;
		$project3->terminal_sga = 13;
		$project3->capex_percentage = 3.5;
		$project3->save();

		$project4 = new Project();
		$project4->project_name = 'Project 4';
		$project4->project_description = 'Project 4 Description';
		$project4->start_year = 2017;
		$project4->end_year = 2021;
		$project4->tax_rate = 24;
		$project4->discount_rate = 11.4;
		$project4->terminal_growth_rate = 4;
		$project4->terminal_rd = 24;
		$project4->terminal_sga = 14;
		$project4->capex_percentage = 4.5;
		$project4->save();

		$project5 = new Project();
		$project5->project_name = 'Project 5';
		$project5->project_description = 'Project 5 Description';
		$project5->start_year = 2018;
		$project5->end_year = 2022;
		$project5->tax_rate = 25;
		$project5->discount_rate = 11.5;
		$project5->terminal_growth_rate = 5;
		$project5->terminal_rd = 25;
		$project5->terminal_sga = 15;
		$project5->capex_percentage = 5.5;
		$project5->save();
	}
}