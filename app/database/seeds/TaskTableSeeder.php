<?php
class TaskTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE tasks');

		# Comments
	    $task1 = new Task();
	    $task1->task_title = 'Fix project 1 revenues';
		$task1->task_text = 'Couple errors in project 1 revenues that need to be fixed';
		$task1->save();

		$task2 = new Task();
		$task2->task_title = 'Reduce project 1 discount rate';
		$task2->task_text = 'Project 1 discount rate too high... Should lower it to 8%...';
		$task2->save();

		$task3 = new Task();
		$task3->task_title = 'Add expenses to project 1';
		$task3->task_text = 'Add missing expenses to project 1';
		$task3->save();

		$task4 = new Task();
		$task4->task_title = 'Review project 1 with sales';
		$task4->task_text = 'Double check with sales that current estimates make sense for project 1';
		$task4->save();

		$task5 = new Task();
		$task5->task_title = 'Tax questions';
		$task5->task_text = 'Talk to the tax dept. about tax rate for project 3';
		$task5->save();

		$task6 = new Task();
		$task6->task_title = 'Meet with Jim';
		$task6->task_text = 'Need to meet with Jim to discuss new project';
		$task6->save();

		$task7 = new Task();
	    $task7->task_title = 'Fix Project 2 HW sales';
		$task7->task_text = 'Something looks weird about Proj 2 HW sales... Review...';
		$task7->save();

		$task8 = new Task();
		$task8->task_title = 'Increae project 2 discount rate';
		$task8->task_text = 'Project 2 discount rate too low... Should increase it to 16%...';
		$task8->save();

		$task9 = new Task();
		$task9->task_title = 'Add expenses to project 2';
		$task9->task_text = 'Add missing expenses to project 2';
		$task9->save();

		$task10 = new Task();
		$task10->task_title = 'Review project 2 with sales';
		$task10->task_text = 'Double check with sales that current estimates make sense for project 2';
		$task10->save();
	}
}