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
        $registration->load('step', 'period', 'period.year', 'type');
        $step = $registration->step;
        $registration->verifyCode();
        $template = str_replace(['{name}', '{tracking_number}','{password}','{username}', '{year}','{nid}'],
         [
             $registration->fullname,
             $registration->code,
             $registration->contact_phone,
             $registration->username,
             $registration->period->year->name,
             $registration->national_id
         ],
         $step->email_template);

        $data = [
        'verification_token'=>$registration->verification_token,
        'fullname'          =>$registration->fullname,
        'template'          =>$template
        ];

       

        if(!empty($registration)) {
            Mail::send('registration::emails.email_verification_token' ,$data, function($message) use($registration){
            	$message->to($registration->contact_email)
                        ->from('postmaster@sandbox7261de34372449bc8d2cd758a277cdc5.mailgun.org')
                        ->subject(trans('registration::registrar.email_verification'));
            });
        }
    }
}