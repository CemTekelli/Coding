<?php

namespace App\Providers;

use App\Events\ArticlePublierEvent;
use App\Events\UserRegisterEvent;
use App\Events\UserRegisterNewsletterEvent;
use App\Listeners\ArticlePublierListener;
use App\Listeners\UserRegisterListener;
use App\Listeners\UserRegisterNewsletterListener;
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
        UserRegisterNewsletterEvent::class=> [
            UserRegisterNewsletterListener::class,
        ],
        UserRegisterEvent::class=> [
            UserRegisterListener::class,
        ],
        ArticlePublierEvent::class=> [
            ArticlePublierListener::class,
        ],
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
