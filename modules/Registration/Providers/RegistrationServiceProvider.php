<?php namespace Modules\Registration\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Menu;

class RegistrationServiceProvider extends ServiceProvider {

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
		$router->model('registrationStep' ,'\Modules\Registration\Entities\RegistrationStep');
		$router->model('registrationPeriod' ,'\Modules\Registration\Entities\RegistrationPeriod');
		$router->model('registrationNote' ,'\Modules\Registration\Entities\RegistrationStepNote');
		
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
		    __DIR__.'/../Config/config.php' => config_path('registration.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'registration'
		);
	}

	/**
	 * Register views.
	 * 
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = base_path('resources/views/modules/registration');

		$sourcePath = __DIR__.'/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		]);

		$this->loadViewsFrom([$viewPath, $sourcePath], 'registration');
	}

	/**
	 * Register translations.
	 * 
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = base_path('resources/lang/modules/registration');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'registration');
		} else {
			$this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'registration');
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
		$submenu = $menu->add(trans('registration::registration.header'))->prepend('<i class="fa fa-check"></i>')->data('permission', ['view.registration.steps', 'view.registration.periods']);
		$submenu->add(trans('registration::steps.header'), ['route'=>'registration.steps.index'])->prepend('<i class="fa fa-recycle"></i>')->data('permission', ['view.registration.steps']);
		$submenu->add(trans('registration::periods.header'), ['route'=>'registration.periods.index'])->prepend('<i class="fa fa-arrows-h"></i>')->data('permission', ['view.registration.periods']);

		$menu->add('حالة الطلب', ['route'=>'registration.registrar.status'])->data('permission',['registrar'])->prepend('<i class="fa fa-question"></i>');
		$menu->add('بوابة الطالب', ['route'=>'registration.registrar.portal'])->data('permission',['registrar'])->prepend('<i class="fa fa-dashboard"></i>');
		$menu->add('تعديل البيانات', ['route'=>'registration.registrar.form'])->data('permission',['registrar'])->prepend('<i class="fa fa-edit"></i>');
		$menu->add('تحميل الملفات', ['route'=>'registration.registrar.files'])->data('permission',['registrar'])->prepend('<i class="fa fa-upload"></i>');
	}

}
