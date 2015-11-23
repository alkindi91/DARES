<?php namespace Modules\Academystructure\Providers;

use Illuminate\Support\ServiceProvider;
use Menu;
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
	public function boot()
	{
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
		$menu->add('الهيكل الاكاديمى' ,['route'=>'faculty.index']);
		return array();
	}

}
