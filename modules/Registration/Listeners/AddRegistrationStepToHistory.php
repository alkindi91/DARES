<?php

namespace Modules\Registration\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use Modules\Registration\Entities\RegistrationHistory;
use Modules\Registration\Events\RegistrationStepChanged;

class AddRegistrationStepToHistory
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
        $extra = $event->extra;
        $history = new RegistrationHistory;
        $history->registration_id = $registration->id;
        $history->registration_step_id = $registration->registration_step_id;
        $history->created_by = user() ? user()->id : NULL;
        if(!empty($extra['comment'])) {
            $history->comment = $extra['comment'];
        }

        if(!empty($extra['registration_step_note_id'])) {
            $history->registration_step_note_id = $extra['registration_step_note_id'];
        }

        $history->save();
    }
}