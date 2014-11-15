<?php
class UserTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE books');
		DB::statement('TRUNCATE authors');
		DB::statement('TRUNCATE tags');
		DB::statement('TRUNCATE book_tag');
		DB::statement('TRUNCATE users');

		# Users
	    $user1 = new User();
		$user1->first_name = 'User1';
		$user1->last_name = 'User1stein';
		$user1->company_name = 'User1 Co';
		$user1->username = 'user1';
		$user1->address_1 = '123 User1 Drive';
		$user1->address_2 = '';
		$user1->city = 'User1Town';
		$user1->state = 'Michigan';
		$user1->zip_code = '11111';
		$user1->country = 'United States';
		$user1->email = 'user1@user1.com';
		$user1->mobile_phone = '+11111234567';
		$user1->password = 'mypassword';
		$user1->save();

		$user2 = new User();
		$user2->first_name = 'User2';
		$user2->last_name = 'User2stein';
		$user2->company_name = 'User2 Co';
		$user2->username = 'user2';
		$user2->address_1 = '123 User2 Drive';
		$user2->address_2 = '';
		$user2->city = 'User2Town';
		$user2->state = 'Michigan';
		$user2->zip_code = '22222';
		$user2->country = 'United States';
		$user2->email = 'user2@user2.com';
		$user2->mobile_phone = '+12221234567';
		$user2->password = 'user2password';
		$user2->save();

		$user3 = new User();
		$user3->first_name = 'User3';
		$user3->last_name = 'User3stein';
		$user3->company_name = 'User3 Co';
		$user3->username = 'user3';
		$user3->address_1 = '123 User3 Drive';
		$user3->address_2 = '';
		$user3->city = 'User3Town';
		$user3->state = 'Michigan';
		$user3->zip_code = '33333';
		$user3->country = 'United States';
		$user3->email = 'user3@user3.com';
		$user3->mobile_phone = '+13331234567';
		$user3->password = 'user3password';
		$user3->save();

		$user4 = new User();
		$user4->first_name = 'User4';
		$user4->last_name = 'User4stein';
		$user4->company_name = 'User4 Co';
		$user4->username = 'user4';
		$user4->address_1 = '123 User4 Drive';
		$user4->address_2 = '';
		$user4->city = 'User4Town';
		$user4->state = 'Michigan';
		$user4->zip_code = '44444';
		$user4->country = 'United States';
		$user4->email = 'user4@user4.com';
		$user4->mobile_phone = '+14441234567';
		$user4->password = 'user4password';
		$user4->save();

		$user5 = new User();
		$user5->first_name = 'User5';
		$user5->last_name = 'User5stein';
		$user5->company_name = 'User5 Co';
		$user5->username = 'user5';
		$user5->address_1 = '123 User5 Drive';
		$user5->address_2 = '';
		$user5->city = 'User5Town';
		$user5->state = 'Michigan';
		$user5->zip_code = '55555';
		$user5->country = 'United States';
		$user5->email = 'user5@user5.com';
		$user5->mobile_phone = '+15551234567';
		$user5->password = 'user5password';
		$user5->save();
	}
}