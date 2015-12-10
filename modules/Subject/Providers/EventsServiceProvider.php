<?php namespace Modules\Subject\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Subject\Entities\SubjectSubject as Subject;

class EventsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		Subject::saving(function($subject) {
			$subject->pre_request = empty($subject->pre_request) ? null : $subject->pre_request;
		});

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

}
