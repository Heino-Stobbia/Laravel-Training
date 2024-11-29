<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\LoginEvent;
use App\Mail\LoginMailable;

class LoginListener
{

    public function __construct()
    {
        
    }

    public function handle(LoginEvent $event): void
    {
        Mail::to($event->user->email)->send(new LoginMailable($event->user));
    }
}
