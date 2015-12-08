<?php namespace Modules\Academycycle\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Users\Entities\User;

class AcademycycleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		$permissions = [
			
			['name'=>'اضافة عام جامع' ,'slug'=>'create.academycycle.years','module'=>'academycycle'],
			['name'=>'تعدل عام جامع' ,'slug'=>'edit.academycycle.years','module'=>'academycycle'],
			['name'=>'حذف عام جامع' ,'slug'=>'delete.academycycle.years','module'=>'academycycle'],
			['name'=>'مشاهدة العام الجامعي ' ,'slug'=>'view.academycycle.years','module'=>'academycycle'],

			
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