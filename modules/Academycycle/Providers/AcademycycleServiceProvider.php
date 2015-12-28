<?php namespace Modules\Academycycle\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Menu;
class AcademycycleServiceProvider extends ServiceProvider {

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
		$router->model('academycycleYear' ,'\Modules\Academycycle\Entities\AcademycycleYear');

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
		    __DIR__.'/../Config/config.php' => config_path('academycycle.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'academycycle'
		);
	}

	/**
	 * Register views.
	 * 
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = base_path('resources/views/modules/academycycle');

		$sourcePath = __DIR__.'/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		]);

		$this->loadViewsFrom([$viewPath, $sourcePath], 'academycycle');
	}

	/**
	 * Register translations.
	 * 
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = base_path('resources/lang/modules/academycycle');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'academycycle');
		} else {
			$this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'academycycle');
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

	public function registerMenu() 
	{
		$menu = Menu::get('SidebarMenu');
		$submenu = $menu->add(trans('academycycle::academycycle.header'))
		                ->data('permission', ['view.academycycle.years'])
		                ->prepend('<i class="fa fa-refresh"></i>');
		
		$submenu->add(trans('academycycle::years.header'), ['route'=>'academycycle.years.index'])
		        ->data('permission', ['view.academycycle.years'])
		        ->prepend('<i class="fa fa-calendar"></i>');
				
		$submenu->add(trans('academycycle::semestereventtypes.header'), ['route'=>'ac.semestereventtypes.index'])
		        ->data('permission', ['view.academycycle.semestereventtypes'])
		        ->prepend('<i class="fa fa-calendar"></i>');
		
	}

}
