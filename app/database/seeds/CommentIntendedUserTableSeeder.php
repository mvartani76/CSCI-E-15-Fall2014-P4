<?php
class CommentIntendedUserTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE comment_intended_user');

		# Comment-Intended_User
		$intended_user1 = User::find(1);
		$intended_user1->intended_user_comments()->attach(1);
		$intended_user1->save();

		$intended_user2 = User::find(2);
		$intended_user2->intended_user_comments()->attach(2);
		$intended_user2->save();	

		$intended_user3 = User::find(3);
		$intended_user3->intended_user_comments()->attach(3);
		$intended_user3->save();

		$intended_user4 = User::find(4);
		$intended_user4->intended_user_comments()->attach(4);
		$intended_user4->save();

		$intended_user5 = User::find(5);
		$intended_user5->intended_user_comments()->attach(5);
		$intended_user5->save();
	}
}