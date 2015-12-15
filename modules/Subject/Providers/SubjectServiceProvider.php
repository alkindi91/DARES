<?php namespace Modules\Subject\Providers;

use Illuminate\Support\ServiceProvider;
use Menu;
class SubjectServiceProvider extends ServiceProvider {

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
		    __DIR__.'/../Config/config.php' => config_path('subject.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'subject'
		);
	}

	/**
	 * Register views.
	 * 
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = base_path('resources/views/modules/subject');

		$sourcePath = __DIR__.'/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		]);

		$this->loadViewsFrom([$viewPath, $sourcePath], 'subject');
	}

	/**
	 * Register translations.
	 * 
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = base_path('resources/lang/modules/subject');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'subject');
		} else {
			$this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'subject');
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
		$submenu = $menu->add('المواد' ,['route'=>'subject.index'])
						->data('permission', ['subject.view.subject'])
		                ->prepend('<i class="fa fa-film"></i>');
		//$submenu->add('الدروس' ,['route'=>'subject.index'])->prepend('<i class="fa fa-film"></i>');<i class="fa fa-folder"></i>
	}

}
