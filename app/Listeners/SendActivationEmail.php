<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\ActivateAccount;
use Illuminate\Support\Facades\Mail;

class SendActivationEmail
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        Mail::to($event->user->email)->send(
            new ActivateAccount($event->user)
        );
    }
}