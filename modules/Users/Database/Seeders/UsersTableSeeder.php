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
		
		$user = User::create(['name'=>'محسن بخيش' ,'email'=>'mouhsine.bakhich@gmail.com' ,'password'=>bcrypt("123456")]);
		$user->id=1;
		$user->save();
		$user = User::create(['name'=>'هيثم' ,'email'=>'haitham.hamdy@css.edu.om ' ,'password'=>bcrypt("123456")]);
		$user = User::create(['name'=>'سامي' ,'email'=>'samialmamari@css.edu.om ' ,'password'=>bcrypt("123456")]);
		$user = User::create(['name'=>'احمد' ,'email'=>'aalkindi@css.edu.om ' ,'password'=>bcrypt("123456")]);
		// $this->call("OthersTableSeeder");
		// 
		Permission::whereIn('slug' ,['delete.roles' ,'create.roles' ,'edit.roles' ,'view.roles','delete.users' ,'create.users' ,'edit.users' ,'view.users'])->delete();
		$users = User::all();

		$createUsersPermission = Permission::create([
		    'name' => 'اضافة مستخدم',
		    'slug' => 'create.users',
		]);
		$deleteUsersPermission = Permission::create([
		    'name' => 'حذف مستخدم',
		    'slug' => 'delete.users',
		]);
		$editUsersPermission = Permission::create([
		    'name' => 'تعديل مستخدم',
		    'slug' => 'edit.users',
		]);
		$viewUsersPermission = Permission::create([
		    'name' => 'مشاهدة المستخدمين',
		    'slug' => 'view.users',
		]);
		$createRolesPermission = Permission::create([
		    'name' => 'اضافة صلاحية',
		    'slug' => 'create.roles',
		]);
		$deleteRolesPermission = Permission::create([
		    'name' => 'حذف صلاحية',
		    'slug' => 'delete.roles',
		]);
		$editRolesPermission = Permission::create([
		    'name' => 'تعديل صلاحية',
		    'slug' => 'edit.roles',
		]);
		$viewRolesPermission = Permission::create([
		    'name' => 'مشاهدة الصلاحيات',
		    'slug' => 'view.roles',
		]);

		foreach($users as $user):
		// permission-

		$user->attachPermission($createUsersPermission);
		// permission
		
		$user->attachPermission($deleteUsersPermission);
		// permission
		
		$user->attachPermission($editUsersPermission);
		// permission
		
		$user->attachPermission($viewUsersPermission);

		/**
		 * seed roles permissions
		 */
		
		// permission-

		$user->attachPermission($createRolesPermission);
		// permission
		$user->attachPermission($deleteRolesPermission);
		// permission
		$user->attachPermission($editRolesPermission);
		// permission
		$user->attachPermission($viewRolesPermission);
		endforeach;
	}

}