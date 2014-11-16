<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('UserTableSeeder');
		 $this->call('PermissionTableSeeder');
		 $this->call('ExpenseTypeTableSeeder');
		 $this->call('RevenueTypeTableSeeder');
		 $this->call('ProjectTableSeeder');
	}

}
