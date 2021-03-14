<?php

namespace App\Http\Controllers;

use App\Events\ActivateUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function confirm(Request $request, User $user)
    {

        event(new ActivateUser($user));

    }

    public function newLink(Request $request, User $user)
    {

        event(new ActivateUser($user));

        return view('emails.resend', compact('user'));

    }

}