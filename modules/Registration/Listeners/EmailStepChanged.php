<?php

namespace Modules\Registration\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use Modules\Registration\Events\RegistrationStepChanged;

class EmailStepChanged
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
     * @param  RegistrationStepChanged  $event
     * @return void
     */
    public function handle(RegistrationStepChanged $event)
    {
        $registration = $event->registration;
        
        if(empty($registration->email_template)) return true;

        $registration->load('step', 'period', 'period.year', 'type');
        $step = $registration->step;
        
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
        'fullname'          =>$registration->fullname,
        'template'          =>$template
        ];

       

        if(!empty($registration)) {
            Mail::send('registration::emails.email_step' ,$data, function ($message) use ($registration, $step) {
            	$message->to($registration->contact_email, $registration->fullname)
                        ->from('postmaster@sandbox7261de34372449bc8d2cd758a277cdc5.mailgun.org')
                        ->subject($step->name);
            });
        }
    }
}