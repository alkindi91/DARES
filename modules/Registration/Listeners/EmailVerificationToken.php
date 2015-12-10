<?php

namespace Modules\Registration\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use Modules\Registration\Events\RegistrationCreated;

class EmailVerificationToken
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
     * @param  RegistrationCreated  $event
     * @return void
     */
    public function handle(RegistrationCreated $event)
    {
        $registration = $event->registration;
        $data = [
        'verification_token'=>$registration->verification_token
        ];
        Mail::send('registration::emails.email.verification' ,$data, function($message) use($registration){
        	$message->to($registration->contact_email)->from('نظام دارس');
        });
    }
}