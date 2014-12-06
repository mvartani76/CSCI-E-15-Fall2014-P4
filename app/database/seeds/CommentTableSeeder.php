<?php
class CommentsTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE comments');

		# Users
	    $comment1 = new Comments();
		$comment1->comment = 'Hey. Nice work on Project 1! What do you think about changing the end year to 2020?';
		$comment1->save();

		$comment1 = new Comments();
		$comment1->comment = 'I am not sure I agree with the discount rate on Project 2';
		$comment1->save();

		$comment1 = new Comments();
		$comment1->comment = 'We need to add Revenues from Customer 1 to Project 3';
		$comment1->save();

		$comment1 = new Comments();
		$comment1->comment = 'Lets remove travel expenses from Project 4';
		$comment1->save();

		$comment1 = new Comments();
		$comment1->comment = 'Project 5 looks good. Lets submit to Frank.';
		$comment1->save();
	}
}