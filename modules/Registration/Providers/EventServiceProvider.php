<?php namespace Modules\Registration\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
       'Modules\Registration\Events\RegistrationCreated' => [
            'Modules\Registration\Listeners\EmailVerificationToken',
        ],
       'Modules\Registration\Events\RegistrationUpdated' => [
            'Modules\Registration\Listeners\VerifyCode',
        ],
       'Modules\Registration\Events\RegistrationStepChanged' => [
            'Modules\Registration\Listeners\AddRegistrationStepToHistory',
            'Modules\Registration\Listeners\EmailStepChanged',
        ],
       'Modules\Registration\Events\RegistrarLogin' => [
            'Modules\Registration\Listeners\LogoutUser',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }

}