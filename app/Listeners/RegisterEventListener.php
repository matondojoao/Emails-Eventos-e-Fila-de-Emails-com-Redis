<?php

namespace App\Listeners;

use App\Mail\NovoRegistro;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class RegisterEventListener
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
     * @param  \App\Events\Register  $event
     * @return void
     */
    public function handle(Registered $event)
    {
       Mail::to($event->user)->send(new NovoRegistro($event->user));
    }
}
