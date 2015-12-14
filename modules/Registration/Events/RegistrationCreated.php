<?php

namespace Modules\Registration\Events;


use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Modules\Registration\Entities\Registration;

class RegistrationCreated extends Event
{
    use SerializesModels;

    public $registration;

    /**
     * Create a new event instance.
     *
     * @param  Registration  $registration
     * @return void
     */
    public function __construct(Registration $registration)
    {
       
        $this->registration = $registration;
    }
}