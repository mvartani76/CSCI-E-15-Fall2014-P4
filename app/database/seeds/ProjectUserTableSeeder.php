<?php
class ProjectUserTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE project_user');

		# Project-User
		$user1 = User::find(1);
		$user1->projects()->attach(1);
		$user1->save();

		$user2 = User::find(2);
		$user2->projects()->attach(2);
		$user2->save();	

		$user3 = User::find(3);
		$user3->projects()->attach(3);
		$user3->save();

		$user4 = User::find(4);
		$user4->projects()->attach(4);
		$user4->save();

		$user5 = User::find(5);
		$user5->projects()->attach(5);
		$user5->save();

		$user5 = User::find(5);
		$user5->projects()->attach(3);
		$user5->save();
	}
}