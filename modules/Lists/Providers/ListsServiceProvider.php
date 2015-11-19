<?php namespace Modules\Lists\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Menu;
use Modules\Lists\Entities\City;
use Modules\Lists\Entities\Country;
use Modules\Structure\Entities\Faculty;

class ListsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the application events.
	 * 
	 * @return void
	 */
	public function boot(Router $router)
	{
		$router->model('country' ,'\Modules\Lists\Entities\Country');
		$router->model('city' ,'\Modules\Lists\Entities\City');
		$this->registerTranslations();
		$this->registerConfig();
		$this->registerViews();
		$this->registerMenu();
		$this->registerEvents();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{		
		//
	}

	/**
	 * Register config.
	 * 
	 * @return void
	 */
	protected function registerConfig()
	{
		$this->publishes([
		    __DIR__.'/../Config/config.php' => config_path('lists.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'lists'
		);
	}

	/**
	 * Register views.
	 * 
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = base_path('resources/views/modules/lists');

		$sourcePath = __DIR__.'/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		]);

		$this->loadViewsFrom([$viewPath, $sourcePath], 'lists');
	}

	/**
	 * Register translations.
	 * 
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = base_path('resources/lang/modules/lists');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'lists');
		} else {
			$this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'lists');
		}
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	public function registerMenu() {
		$menu = Menu::get('SidebarMenu');
		$sysmenu = $menu->add('<i class="fa fa-th"></i> القوائم')
						->data('module' ,'lists')
						->data('order' ,20);
		

		
		$sysmenu->add('الدول و المدن' ,['route'=>'countries.index']);

	}

	public function registerEvents() {

		City::creating(function($city) {
			$city->created_by = user()->id;
		});

		Country::creating(function($country) {
			$country->created_by = user()->id;
		});
	}

}
