<?php namespace Modules\Academystructure\Providers;

use Illuminate\Support\ServiceProvider;
use Menu;
use Illuminate\Routing\Router;
class AcademystructureServiceProvider extends ServiceProvider {

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
		$router->model('asFaculty' ,'\Modules\Academystructure\Entities\Faculty');
		$router->model('asYear' ,'\Modules\Academystructure\Entities\Year');
		$router->model('asTerm' ,'\Modules\Academystructure\Entities\Term');
		$router->model('asDepart' ,'\Modules\Academystructure\Entities\Department');
		$router->model('asSpec' ,'\Modules\Academystructure\Entities\Specialty');
		
		$this->registerTranslations();
		$this->registerConfig();
		$this->registerViews();
		$this->registerMenu();
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
		    __DIR__.'/../Config/config.php' => config_path('academystructure.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'academystructure'
		);
	}

	/**
	 * Register views.
	 * 
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = base_path('resources/views/modules/academystructure');

		$sourcePath = __DIR__.'/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		]);

		$this->loadViewsFrom([$viewPath, $sourcePath], 'academystructure');
	}

	/**
	 * Register translations.
	 * 
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = base_path('resources/lang/modules/academystructure');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'academystructure');
		} else {
			$this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'academystructure');
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
	/**
	 * Academy Structure.
	 *
	 * @return array
	 */
	public function registerMenu()
	{
		$menu = Menu::get('SidebarMenu');
		$main_academy = $menu->add( trans('academystructure::menu.academy') ,['route'=>'as.faculties.index'])->prepend('<i class="fa fa-tree"></i>');
		$main_academy->add( trans('academystructure::menu.academystructure') ,['route'=>'as.faculties.index'])->prepend('<i class="fa fa-tree"></i>');
		$main_academy->add( trans('academystructure::menu.specialty') ,['route'=>'as.specialties.index'])->prepend('<i class="fa fa-tree"></i>');
		return array();
	}

}
