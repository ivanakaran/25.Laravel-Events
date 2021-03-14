<?php

namespace App\Listeners;

use App\Events\ActivateUser;
use App\Models\User;

class ActivateUserListener
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
     * @param  ActivateUser  $event
     * @return void
     */
    public function handle(ActivateUser $event)
    {

        $user = $event->user;
        $user->is_active = true;
        $user->save();
    }
}