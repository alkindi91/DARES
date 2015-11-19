<?php namespace Modules\Lists\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Users\Entities\User;

class PermissionsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		$permissions = [
			['name'=>'اضافة دول' ,'slug'=>'create.countries'],
			['name'=>'تعدل دول' ,'slug'=>'edit.countries'],
			['name'=>'حذف دول' ,'slug'=>'delete.countries'],
			['name'=>'مشاهدة الدولة' ,'slug'=>'view.countries'],
			['name'=>'اضافة مدن' ,'slug'=>'create.cities'],
			['name'=>'تعدل مدن' ,'slug'=>'edit.cities'],
			['name'=>'حذف مدن' ,'slug'=>'delete.cities'],
			['name'=>'مشاهدة المدن' ,'slug'=>'view.cities'],
			
		];

		$ids = array_map(function ($ar) {return $ar['slug'];}, $permissions);

		dd($ids);
		
		Permission::whereIn('slug' ,['delete.roles' ,'create.roles' ,'edit.roles' ,'view.roles','delete.users' ,'create.users' ,'edit.users' ,'view.users'])->delete();

		$users = User::all();

		foreach($permissions as $permission){
			$perm = Permission::create($permission);

			foreach($users as $user)
				$user->attachPermission($perm);
		}
	}

}