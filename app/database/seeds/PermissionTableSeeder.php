<?php
class PermissionTableSeeder extends Seeder {
	public function run() {
		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE permissions');

		# Permissions
	    $permission1 = new Permission();
		$permission1->permission_level = 'Administrator';
		$permission1->p_view = TRUE;
		$permission1->p_add = TRUE;
		$permission1->p_update = TRUE;
		$permission1->p_delete = TRUE;
		$permission1->p_approve = TRUE;
		$permission1->p_customize = TRUE;
		$permission1->save();

		$permission2 = new Permission();
		$permission2->permission_level = 'ProjectOwner';
		$permission2->p_view = TRUE;
		$permission2->p_add = TRUE;
		$permission2->p_update = TRUE;
		$permission2->p_delete = TRUE;
		$permission2->p_approve = TRUE;
		$permission2->p_customize = FALSE;
		$permission2->save();

		$permission3 = new Permission();
		$permission3->permission_level = 'Member';
		$permission3->p_view = TRUE;
		$permission3->p_add = TRUE;
		$permission3->p_update = TRUE;
		$permission3->p_delete = FALSE;
		$permission3->p_approve = FALSE;
		$permission3->p_customize = FALSE;
		$permission3->save();

		$permission4 = new Permission();
		$permission4->permission_level = 'Visitor';
		$permission4->p_view = TRUE;
		$permission4->p_add = FALSE;
		$permission4->p_update = FALSE;
		$permission4->p_delete = FALSE;
		$permission4->p_approve = FALSE;
		$permission4->p_customize = FALSE;
		$permission4->save();

		$permission5 = new Permission();
		$permission5->permission_level = 'NoAccess';
		$permission5->p_view = FALSE;
		$permission5->p_add = FALSE;
		$permission5->p_update = FALSE;
		$permission5->p_delete = FALSE;
		$permission5->p_approve = FALSE;
		$permission5->p_customize = FALSE;
		$permission5->save();
	}
}