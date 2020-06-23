<?php

namespace App\Providers;

use App\Events\OrderRegistered;
use App\Events\UserRegistered;
use App\Listeners\SendOrderDetail;
use App\Listeners\SendVerificationEmail;
use App\Mail\OrderDetail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        OrderRegistered::class => [
            SendOrderDetail::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
