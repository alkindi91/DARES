<?php namespace Modules\Users\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Menu;
class UsersServiceProvider extends ServiceProvider {

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
		$router->model('user' ,'\Modules\Users\Entities\User');
		$router->model('role' ,'\Bican\Roles\Models\Role');
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
		    __DIR__.'/../Config/config.php' => config_path('users.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'users'
		);
	}

	/**
	 * Register views.
	 * 
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = base_path('resources/views/modules/users');

		$sourcePath = __DIR__.'/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		]);

		$this->loadViewsFrom([$viewPath, $sourcePath], 'users');
	}

	/**
	 * Register translations.
	 * 
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = base_path('resources/lang/modules/users');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'users');
		} else {
			$this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'users');
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
		$sysmenu = $menu->add('<i class="fa fa-home"></i> النظام' ,null)->data('order' ,2);
		$sysmenu->add('المستخدمين' ,['route'=>'users.index']);
		$sysmenu->add('المجموعات' ,['route'=>'roles.index']);
	}

}
