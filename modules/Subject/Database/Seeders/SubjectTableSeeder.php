<?php namespace Modules\Subject\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Users\Entities\User;

class SubjectTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		// $this->call("OthersTableSeeder");
		$permissions = array(
				array('name'=>'عرض مادة' ,'slug'=>'subject.view.subject','module'=>'subject'),
				array('name'=>'إضافة مادة' ,'slug'=>'subject.create.subject','module'=>'subject'),
				array('name'=>'تعديل مادة' ,'slug'=>'subject.edit.subject','module'=>'subject'),
				array('name'=>'حذف مادة' ,'slug'=>'subject.delete.subject','module'=>'subject'),

				array('name'=>'عرض درس' ,'slug'=>'subject.view.lesson','module'=>'subject'),
				array('name'=>'إضافة درس' ,'slug'=>'subject.create.lesson','module'=>'subject'),
				array('name'=>'تعديل درس' ,'slug'=>'subject.edit.lesson','module'=>'subject'),
				array('name'=>'حذف درس' ,'slug'=>'subject.delete.lesson','module'=>'subject'),

				array('name'=>'عرض عنصر' ,'slug'=>'subject.view.element','module'=>'subject'),
				array('name'=>'إضافة عنصر' ,'slug'=>'subject.create.element','module'=>'subject'),
				array('name'=>'تعديل عنصر' ,'slug'=>'subject.edit.element','module'=>'subject'),
				array('name'=>'حذف عنصر' ,'slug'=>'subject.delete.element','module'=>'subject'),
			);

		$users = User::all();

		$slugs = array_map(function ($ar) {return $ar['slug'];}, $permissions);

		Permission::whereIn('slug' ,$slugs)->delete();

		foreach ($permissions 	as $permission) {
			$perm = Permission::create($permission);

			foreach ($users as $user) {
				$user->attachPermission($perm);
			}

		}
	}

}