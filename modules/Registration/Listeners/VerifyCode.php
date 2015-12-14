<?php

namespace Modules\Registration\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use Modules\Registration\Events\RegistrationUpdated;

class VerifyCode
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
        
        if($registration->getOriginal('registration_type_id')!=$registration->registration_type_id
            OR $registration->getOriginal('academystructure_speciality_id')!=$registration->academystructure_speciality_id
            OR $registration->getOriginal('registration_period_id')!=$registration->registration_period_id
            OR $registration->getOriginal('gender')!=$registration->gender
            )  {

        $registration->verifyCode();
        }
    }
}