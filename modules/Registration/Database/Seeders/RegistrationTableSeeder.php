<?php namespace Modules\Registration\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Users\Entities\User;

class RegistrationTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		$permissions = [
			['name'=>'اضافة مرحلة قبول تسجيل' ,'slug'=>'create.registration.steps'],
			['name'=>'تعدل مرحلة قبول تسجيل' ,'slug'=>'edit.registration.steps'],
			['name'=>'حذف مرحلة قبول تسجيل' ,'slug'=>'delete.registration.steps'],
			['name'=>'مشاهدة مراحل التسجيل' ,'slug'=>'view.registration.steps'],
			['name'=>'اضافة عام جامعي تسجيل' ,'slug'=>'create.registration.years'],
			['name'=>'تعدل عام جامعي تسجيل' ,'slug'=>'edit.registration.years'],
			['name'=>'حذف عام جامعي تسجيل' ,'slug'=>'delete.registration.years'],
			['name'=>'مشاهدة العام الجامعي التسجيل' ,'slug'=>'view.registration.years'],
			
			
		];

		$slugs = array_map(function ($ar) {return $ar['slug'];}, $permissions);

		Permission::whereIn('slug' ,$slugs)->delete();

		$users = User::all();

		foreach($permissions as $permission){
			$perm = Permission::create($permission);

			foreach($users as $user)
				$user->attachPermission($perm);
		}
	}

}