<?php
class CommentProjectTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE comment_project');

		# Comment-Project
		$project1 = Project::find(1);
		$project1->comments()->attach(1);
		$project1->save();

		$project2 = Project::find(2);
		$project2->comments()->attach(2);
		$project2->save();	

		$project3 = Project::find(3);
		$project3->comments()->attach(3);
		$project3->save();

		$project4 = Project::find(4);
		$project4->comments()->attach(4);
		$project4->save();

		$project5 = Project::find(5);
		$project5->comments()->attach(5);
		$project5->save();
	}
}