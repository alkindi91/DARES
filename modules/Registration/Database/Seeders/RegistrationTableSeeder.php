<?php namespace Modules\Registration\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Registration\Entities\RegistrationPeriod;
use Modules\Registration\Entities\RegistrationStep;
use Modules\Registration\Entities\RegistrationType;
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
			// ['name'=>'اضافة قبول' ,'slug'=>'create.registration.steps','module'=>'registration'],
			['name'=>'تعدل طلب' ,'slug'=>'edit.registration.registrations','module'=>'registration'],
			['name'=>'حذف طلب' ,'slug'=>'delete.registration.registrations','module'=>'registration'],
			['name'=>'مشاهدة الطلبات' ,'slug'=>'view.registration.registrations','module'=>'registration'],
			

			['name'=>'اضافة مرحلة قبول تسجيل' ,'slug'=>'create.registration.steps','module'=>'registration'],
			['name'=>'تعدل مرحلة قبول تسجيل' ,'slug'=>'edit.registration.steps','module'=>'registration'],
			['name'=>'حذف مرحلة قبول تسجيل' ,'slug'=>'delete.registration.steps','module'=>'registration'],
			['name'=>'مشاهدة مراحل التسجيل' ,'slug'=>'view.registration.steps','module'=>'registration'],
			
			
			['name'=>'اضافة فترة القبول' ,'slug'=>'create.registration.periods','module'=>'registration'],
			['name'=>'تعدل فترة القبول' ,'slug'=>'edit.registration.periods','module'=>'registration'],
			['name'=>'حذف فترة القبول' ,'slug'=>'delete.registration.periods','module'=>'registration'],
			['name'=>'مشاهدة فترات القبول' ,'slug'=>'view.registration.periods','module'=>'registration'],

			['name'=>'اضافة ملاحظة لمرحلة قبول' ,'slug'=>'create.registration.notes','module'=>'registration'],
			['name'=>'تعدل ملاحظة لمرحلة قبول' ,'slug'=>'edit.registration.notes','module'=>'registration'],
			['name'=>'حذف ملاحظة من مرحلة قبول' ,'slug'=>'delete.registration.notes','module'=>'registration'],
			['name'=>'مشاهدة ملاحظات مراحل القبول' ,'slug'=>'view.registration.notes','module'=>'registration'],
		];

		$slugs = array_map(function ($ar) {return $ar['slug'];}, $permissions);

		Permission::whereIn('slug' ,$slugs)->delete();

		$types = [
			['title'=>'دبلوم','code'=>'D'],
			['title'=>'بكالوريوس','code'=>'B'],
			['title'=>'تكميلي','code'=>'C'],
		];
		
		$period = [
			'start_at'=>date('Y-m-d'),
			'finish_at'=>date("Y-m-d" ,strtotime('+1 month' ,strtotime(date('Y-m-d')))),
			'code'=>'161',
			'academycycle_year_id'=>'1',
		];

		$steps = [[
			'name'=>'تم تقديم طلب',
			'verify_email'=>1,
			'email_template'=>view('registration::steps.templates.verify_email')
		],[
			'name'=>'رفع الملفات',
			'upload_files'=>1
		],[
			'name'=>'الغاء'
		]
		];
        
        RegistrationStep::whereNotNull('id')->delete();
		foreach ($steps as $step) {
			RegistrationStep::create($step);
		}
		


		RegistrationPeriod::whereNotNull('id')->delete();
		RegistrationPeriod::create($period);

		
		RegistrationType::whereNotNull('id')->delete();
		foreach($types as $type) {
			RegistrationType::create($type);
		}
		
		$users = User::all();

		foreach($permissions as $permission){
			$perm = Permission::create($permission);

			foreach($users as $user)
				$user->attachPermission($perm);
		}
	}

}