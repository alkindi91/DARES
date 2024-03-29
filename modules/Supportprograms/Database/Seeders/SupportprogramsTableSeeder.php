<?php namespace Modules\Supportprograms\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Supportprograms\Entities\SupportprogramsApplication as Program;
use Modules\Users\Entities\User;

class SupportprogramsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		Permission::where('module','supportprograms')->delete();

		// $this->call("OthersTableSeeder");
		$permissions = [
				[
						'name'=>'اضافة برنامج',
						'slug'=>'create.supportprograms',
						'module'=>'supportprograms'
				],[
						'name'=>'عرض البرامج',
						'slug'=>'index.supportprograms',
						'module'=>'supportprograms'
				],[
						'name'=>'تعديل برنامج',
						'slug'=>'edit.supportprograms',
						'module'=>'supportprograms'
				],[
						'name'=>'عرض برنامج',
						'slug'=>'show.supportprograms',
						'module'=>'supportprograms'
				],[
						'name'=>'حذف برنامج',
						'slug'=>'delete.supportprograms',
						'module'=>'supportprograms'
				]
		];

		$programs = [
			[
			'name'=>'اي شيء',
			'comment'=>'رابط اي شيء',
			'program_link'=>'http://google.com',
			'guide_link'=>'http://google.com',
			],
			[
			'name'=>'اي شيء 2',
			'comment'=>'رابط اي شيء 2',
			'program_link'=>'http://google.com',
			'guide_link'=>'http://google.com',
			],
		];

		$users = User::all();

		foreach($permissions as $permission) {
			$perm = Permission::create($permission);

			foreach ($users as $user) {
				$user->attachPermission($perm);
			}
		}

		foreach($programs as $program)
		{
			Program::create($program);
		}
		

		
	}

}