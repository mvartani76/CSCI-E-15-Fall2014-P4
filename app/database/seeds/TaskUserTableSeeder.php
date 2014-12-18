<?php
class TaskUserTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE task_user');

		# Task-User
		$user1 = User::find(1);
		$user1->tasks()->attach(1);
		$user1->tasks()->attach(2);
		$user1->tasks()->attach(3);
		$user1->tasks()->attach(4);
		$user1->tasks()->attach(5);
		$user1->tasks()->attach(6);
		$user1->save();

		$user2 = User::find(2);
		$user2->tasks()->attach(7);
		$user2->tasks()->attach(8);
		$user2->tasks()->attach(9);
		$user2->tasks()->attach(10);		
		$user2->save();	

	}
}