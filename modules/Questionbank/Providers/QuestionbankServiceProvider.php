<?php namespace Modules\Questionbank\Providers;

use Illuminate\Support\ServiceProvider;
use Menu;

class QuestionbankServiceProvider extends ServiceProvider {

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
		    __DIR__.'/../Config/config.php' => config_path('questionbank.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'questionbank'
		);
	}

	/**
	 * Register views.
	 * 
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = base_path('resources/views/modules/questionbank');

		$sourcePath = __DIR__.'/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		]);

		$this->loadViewsFrom([$viewPath, $sourcePath], 'questionbank');
	}

	/**
	 * Register translations.
	 * 
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = base_path('resources/lang/modules/questionbank');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'questionbank');
		} else {
			$this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'questionbank');
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
		$submenu = $menu->add('بنك الاسئلة' ,['route'=>'questionbank.index'])
						->data('permission', ['show.academystructure.faculties','show.academystructure.specialties'])
		                ->prepend('<i class="fa fa-film"></i>');
		//$submenu->add('الدروس' ,['route'=>'subject.index'])->prepend('<i class="fa fa-film"></i>');<i class="fa fa-folder"></i>
	}


}
