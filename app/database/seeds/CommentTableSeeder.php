<?php
class CommentTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE comments');

		# Comments
	    $comment1 = new Comment();
	    $comment1->comment_title = 'Change End Year?';
		$comment1->comment_text = 'Hey. Nice work on Project 1! What do you think about changing the end year to 2020?';
		$comment1->intended_user = 5;
		$comment1->save();

		$comment2 = new Comment();
		$comment2->comment_title = 'Discount Rate Question';
		$comment2->comment_text = 'I am not sure I agree with the discount rate on Project 2';
		$comment2->intended_user = 4;
		$comment2->save();

		$comment3 = new Comment();
		$comment3->comment_title = 'Customer 1 Revenues to Project 3';
		$comment3->comment_text = 'We need to add Revenues from Customer 1 to Project 3';
		$comment3->intended_user = 2;
		$comment3->save();

		$comment4 = new Comment();
		$comment4->comment_title = 'Project 4 Travel Expenses';
		$comment4->comment_text = 'Lets remove travel expenses from Project 4';
		$comment4->intended_user = 3;
		$comment4->save();

		$comment5 = new Comment();
		$comment5->comment_title = 'Looks Good!';
		$comment5->comment_text = 'Project 5 looks good. Lets submit to Frank.';
		$comment5->intended_user = 1;
		$comment5->save();
	}
}