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
		$user = User::create(['name'=>'هيثم' ,'email'=>'haitham.hamdy@css.edu.om ' ,'password'=>bcrypt("123456")]);
		$user = User::create(['name'=>'سامي' ,'email'=>'samialmamari@css.edu.om ' ,'password'=>bcrypt("123456")]);
		$user = User::create(['name'=>'احمد' ,'email'=>'aalkindi@css.edu.om ' ,'password'=>bcrypt("123456")]);
		// $this->call("OthersTableSeeder");
		// 
		Permission::whereIn('slug' ,['delete.users' ,'create.users' ,'edit.users' ,'view.users'])->delete();
		// permission-
		$createUsersPermission = Permission::create([
		    'name' => 'اضافة مستخدم',
		    'slug' => 'create.users',
		]);
		
		$user->attachPermission($createUsersPermission);
		// permission
		$deleteUsersPermission = Permission::create([
		    'name' => 'حذف مستخدم',
		    'slug' => 'delete.users',
		]);

		$user->attachPermission($deleteUsersPermission);
		// permission
		$editUsersPermission = Permission::create([
		    'name' => 'تعديل مستخدم',
		    'slug' => 'edit.users',
		]);

		$user->attachPermission($editUsersPermission);
		// permission
		$viewUsersPermission = Permission::create([
		    'name' => 'مشاهدة المستخدمين مستخدم',
		    'slug' => 'view.users',
		]);

		$user->attachPermission($viewUsersPermission);
	}

}