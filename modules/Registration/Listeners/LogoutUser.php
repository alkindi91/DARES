<?php

namespace Modules\Registration\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Auth;
use Mail;
use Modules\Registration\Events\RegistrarLogin;

class LogoutUser
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
     * @param  RegistrarLogin  $event
     * @return void
     */
    public function handle(RegistrarLogin $event)
    {
       Auth::logout();
    }
}