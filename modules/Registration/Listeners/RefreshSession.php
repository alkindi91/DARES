<?php

namespace Modules\Registration\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use Modules\Registration\Events\RegistrationUpdated;

class RefreshSession
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegistrationUpdated  $event
     * @return void
     */
    public function handle(RegistrationUpdated $event)
    {
        $registration = $event->registration;
        $registration->load('step','type','degrees','speciality','period','birthcountry','contactcountry','contactcity','nationalitycity');
        session()->put(config('registration.session_key'), $registration);

    }
}