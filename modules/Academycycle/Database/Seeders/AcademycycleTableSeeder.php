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
			
			['name'=>'اضافة فصل دراسى' ,'slug'=>'create.academycycle.semesters','module'=>'academycycle'],
			['name'=>'تعدل فصل دراسى' ,'slug'=>'edit.academycycle.semesters','module'=>'academycycle'],
			['name'=>'حذف فصل دراسى' ,'slug'=>'delete.academycycle.semesters','module'=>'academycycle'],
			['name'=>'مشاهدة الفصول الدراسية ' ,'slug'=>'view.academycycle.semesters','module'=>'academycycle'],
			
			['name'=>'اضافة نوع حدث' ,'slug'=>'create.academycycle.semestereventtypes','module'=>'academycycle'],
			['name'=>'تعدل نوع حدث' ,'slug'=>'edit.academycycle.semestereventtypes','module'=>'academycycle'],
			['name'=>'حذف نوع حدث' ,'slug'=>'delete.academycycle.semestereventtypes','module'=>'academycycle'],
			['name'=>'مشاهدة انواع الاحداث ' ,'slug'=>'view.academycycle.semestereventtypes','module'=>'academycycle'],

			
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