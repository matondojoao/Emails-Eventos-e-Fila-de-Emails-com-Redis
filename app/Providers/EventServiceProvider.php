<?php

namespace App\Providers;

use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\LoginEvent;
use App\Listeners\LoginEventListener;
use App\Events\Register;
use App\Listeners\RegisterEventListener;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            RegisterEventListener::class,
        ],
        Login::class=>[
            LoginEventListener::class,
        ],
    ];




    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
