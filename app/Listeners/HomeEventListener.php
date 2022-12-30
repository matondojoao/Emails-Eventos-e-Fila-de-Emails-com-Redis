<?php

namespace App\Listeners;

use App\Events\HomeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HomeEventListener
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
     * @param  \App\Events\HomeEvent  $event
     * @return void
     */
    public function handle(HomeEvent $event)
    {
        info("Entrou no Home");
        info($event->text);
    }
}
