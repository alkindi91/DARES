<?php namespace Modules\Lists\Database\Seeders;

use Bican\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Lists\Entities\City;
use Modules\Lists\Entities\Country;
use Modules\Lists\Entities\State;
use Modules\Users\Entities\User;
use File;
use Stichoza\GoogleTranslate\TranslateClient;
class ListsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		$countries = json_decode(File::get(__DIR__."/countries.json") ,true);


		$cities = [
			'OM'=>
			[
				['name'=>'مسقط','states'=>[
					['name'=>'الخوير']
				]],
				['name'=>'البريمي'],
				['name'=>'الباطنة شمال'],
				['name'=>'الباطنة جنوب'],
				['name'=>'الظاهرة'],
				['name'=>'الداخلية '],
				['name'=>'الشرقية شمال'],
				['name'=>'الشرقية جنوب'],
				['name'=>'الوسطى'],
				['name'=>'ظفار'],
				['name'=>'مسندم'],
			]
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
		
		$tr = new TranslateClient('en', 'ar');

		foreach($countries as $country){
			$name  = $tr->translate($country['name']);
			
			$newCountry = Country::create(['name'=>$name ,'calling_code'=>$country['calling_code']]);

			if(isset($cities[$country['iso_3166_2']])) {
				foreach($cities[$country['iso_3166_2']] as $city) {

					$newCity = City::create(['name'=>$city['name'] ,'country_id'=>$newCountry->id]);
					
					if(isset($city['states'])) {
						foreach($city['states'] as $state) {
							State::create(['name'=>$state['name'] ,'city_id'=>$newCity->id]);
						}
					}
				}
			}
		}
	}

}