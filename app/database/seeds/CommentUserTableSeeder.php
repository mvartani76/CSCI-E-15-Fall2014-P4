<?php
class CommentUserTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE comment_user');

		# Comment-User
		$user1 = User::find(1);
		$user1->comments()->attach(1);
		$user1->save();

		$user2 = User::find(2);
		$user2->comments()->attach(2);
		$user2->save();	

		$user3 = User::find(3);
		$user3->comments()->attach(3);
		$user3->save();

		$user4 = User::find(4);
		$user4->comments()->attach(4);
		$user4->save();

		$user5 = User::find(5);
		$user5->comments()->attach(5);
		$user5->save();
	}
}