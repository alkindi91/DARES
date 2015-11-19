<?php namespace Modules\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Users\Entities\User;
use Bican\Roles\Models\Permission;
class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::whereNotNull('id')->delete();
		
		Model::unguard();

		$users = User::all();

		$users = [
			['id'=>1,'name'=>'محسن بخيش' ,'email'=>'mouhsine.bakhich@gmail.com' ,'password'=>bcrypt("123456")],
			['name'=>'هيثم' ,'email'=>'haitham.hamdy@css.edu.om ' ,'password'=>bcrypt("123456")],
			['name'=>'سامي' ,'email'=>'samialmamari@css.edu.om ' ,'password'=>bcrypt("123456")],
			['name'=>'احمد' ,'email'=>'aalkindi@css.edu.om ' ,'password'=>bcrypt("123456")]
		];

		foreach($users as $user) 
			User::create($user);

		$permissions = [
			['name' => 'اضافة مستخدم','slug' => 'create.users'],
			['name' => 'حذف مستخدم','slug' => 'delete.users'],
			['name' => 'تعديل مستخدم','slug' => 'edit.users'],
			['name' => 'مشاهدة المستخدمين','slug' => 'view.users'],
			['name' => 'اضافة صلاحية','slug' => 'create.roles'],
			['name' => 'حذف صلاحية','slug' => 'delete.roles'],
			['name' => 'تعديل صلاحية','slug' => 'edit.roles'],
			['name' => 'مشاهدة الصلاحيات','slug' => 'view.roles']
		];

		$slugs = array_map(function ($ar) {return $ar['slug'];}, $permissions);
		
		$users = User::all();
		
		Permission::whereIn('slug' ,$slugs)->delete();

		foreach($permissions as $permission){
			$perm = Permission::create($permission);

			foreach($users as $user)
				$user->attachPermission($perm);
		}

		
	}

}