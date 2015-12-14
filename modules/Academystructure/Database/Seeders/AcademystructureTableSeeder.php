<?php namespace Modules\Academystructure\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Users\Entities\User;

class AcademystructureTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$permissions = [
			// Faculty
			['name'=>'اضافة كلية' ,'slug'=>'create.academystructure.faculties','module'=>'academystructure'],
			['name'=>'تعديل كلية' ,'slug'=>'edit.academystructure.faculties','module'=>'academystructure'],
			['name'=>'حذف كلية' ,'slug'=>'delete.academystructure.faculties','module'=>'academystructure'],
			['name'=>'مشاهدة الكليات' ,'slug'=>'show.academystructure.faculties','module'=>'academystructure'],
			//Year
			['name'=>'اضافة سنة دراسية' ,'slug'=>'create.academystructure.years','module'=>'academystructure'],
			['name'=>'تعديل سنة دراسية' ,'slug'=>'edit.academystructure.years','module'=>'academystructure'],
			['name'=>'حذف سنة دراسية' ,'slug'=>'delete.academystructure.years','module'=>'academystructure'],
			['name'=>'مشاهدة السنوات الدراسية' ,'slug'=>'show.academystructure.years','module'=>'academystructure'],
			//Term
			['name'=>'اضافة فصل دراسى' ,'slug'=>'create.academystructure.terms','module'=>'academystructure'],
			['name'=>'تعديل فصل دراسى' ,'slug'=>'edit.academystructure.terms','module'=>'academystructure'],
			['name'=>'حذف فصل دراسى' ,'slug'=>'delete.academystructure.terms','module'=>'academystructure'],
			['name'=>'مشاهدة الفصول الدراسية' ,'slug'=>'show.academystructure.terms','module'=>'academystructure'],
			//Department
			['name'=>'اضافة التخصص الدراسي' ,'slug'=>'create.academystructure.departments','module'=>'academystructure'],
			['name'=>'تعديل التخص الدراسي' ,'slug'=>'edit.academystructure.departments','module'=>'academystructure'],
			['name'=>'حذف التخصص الدراسي' ,'slug'=>'delete.academystructure.departments','module'=>'academystructure'],
			['name'=>'مشاهدة التخصصات الدراسية' ,'slug'=>'show.academystructure.departments','module'=>'academystructure'],		
		];
		
		
		// for Reset Permission 
		$slugs = array_map(function ($ar) {return $ar['slug'];}, $permissions);
		Permission::whereIn('slug' ,$slugs)->delete();
		//
		
		$users = User::all();
		foreach($permissions as $permission){
			$permission = Permission::create($permission);
			// Temporary
			foreach($users as $user) {
				$user->attachPermission($permission);	
			}
			//
		}
	}

}