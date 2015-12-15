<?php

namespace App\Listeners;

use App\Events\UserAuthenticated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteRegistrationSession
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
     * @param  UserAuthenticated  $event
     * @return void
     */
    public function handle(UserAuthenticated $event)
    {
        session()->forget(config('registration.session_key'));
        
    }
}
