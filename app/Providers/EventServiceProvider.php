<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
=======
     * The event listener mappings for the application.
     *
     * @var array
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
<<<<<<< HEAD
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
=======
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
}
