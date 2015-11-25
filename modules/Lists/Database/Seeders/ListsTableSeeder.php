<?php namespace Modules\Lists\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Lists\Entities\City;
use Modules\Lists\Entities\Country;
use Modules\Lists\Entities\State;
use Modules\Users\Entities\User;

class ListsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		$countries = [
			['name'=>'سلطنة عمان' ,'cities'=>[
				['name'=>'مسقط'],
				['name'=>'البريمي'],
				['name'=>'الباطنة شمال'],
				['name'=>'الباطنة جنوب'],
				['name'=>'الظاهرة'],
				['name'=>'الداخلية ','states'=>[
					['name'=>'لبخوير']
				]],
				['name'=>'الشرقية شمال'],
				['name'=>'الشرقية جنوب'],
				['name'=>'الوسطى'],
				['name'=>'ظفار'],
				['name'=>'مسندم'],
			]],
			['name'=>'أفغانستان'],
			['name'=>'مصر'],
			['name'=>'تونس'],
			['name'=>'الجزائر'],
			['name'=>'المغرب'],
			['name'=>'ليبيا'],
			['name'=>'السودان'],
			['name'=>'موريتانيا'],
			['name'=>'الصومال'],
			['name'=>'جيبوتي'],
		    ['name'=>'جزر القمر'],
			['name'=>'السعوديه'],
			['name'=>'الكويت'],
			['name'=>'البحرين'],
			['name'=>'قطر'],
			['name'=>'الامارات'],
			['name'=>'اليمن'],
			['name'=>'العراق'],
			['name'=>'الاردن'],
			['name'=>'فلسطين'],
			['name'=>'لبنان'],
			['name'=>'سوريا'],
		];
		$permissions = [
			['name'=>'اضافة دول' ,'slug'=>'create.countries', 'module'=>'lists'],
			['name'=>'تعدل دول' ,'slug'=>'edit.countries', 'module'=>'lists'],
			['name'=>'حذف دول' ,'slug'=>'delete.countries', 'module'=>'lists'],
			['name'=>'مشاهدة الدولة' ,'slug'=>'view.countries', 'module'=>'lists'],
			
			['name'=>'اضافة مدن' ,'slug'=>'create.cities', 'module'=>'lists'],
			['name'=>'تعدل مدن' ,'slug'=>'edit.cities', 'module'=>'lists'],
			['name'=>'حذف مدن' ,'slug'=>'delete.cities', 'module'=>'lists'],
			['name'=>'مشاهدة المدن' ,'slug'=>'view.cities', 'module'=>'lists'],

			['name'=>'اضافة محافظة' ,'slug'=>'create.states', 'module'=>'lists'],
			['name'=>'تعدل محافظة' ,'slug'=>'edit.states', 'module'=>'lists'],
			['name'=>'حذف محافظة' ,'slug'=>'delete.states', 'module'=>'lists'],
			['name'=>'مشاهدة المحافظات' ,'slug'=>'view.states', 'module'=>'lists'],
			
		];

		$slugs = array_map(function ($ar) {return $ar['slug'];}, $permissions);

		Permission::whereIn('slug' ,$slugs)->delete();
		Country::whereNotNull('id')->delete();
		City::whereNotNull('id')->delete();
		State::whereNotNull('id')->delete();
		$users = User::all();

		foreach($permissions as $permission){
			$perm = Permission::create($permission);

			foreach($users as $user)
				$user->attachPermission($perm);
		}
		foreach($countries as $country){

			$newCountry = Country::create(['name'=>$country['name']]);

			if(isset($country['cities'])) {
				foreach($country['cities'] as $city) {

					$newCity = City::create(['name'=>$city['name'] ,'country_id'=>$newCountry->id]);
					
					if(isset($city['states'])) {
						foreach($city['states'] as $governorate) {
							State::create(['name'=>$governorate['name'] ,'city_id'=>$newCity->id]);
						}
					}
				}
			}
		}
	}

}