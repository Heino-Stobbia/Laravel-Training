<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\LoginEvent;
use App\Listeners\LoginListener;
use GuzzleHttp\Psr7\Query;
use App\Managers\QueryStringManager;

class AppServiceProvider extends ServiceProvider
{

    public $singletons = [
        QueryStringManager::class => QueryStringManager::class
    ];

    public function register(): void
    {
        
    }

    public function boot(): void
    {
        Event::listen(
            LoginEvent::class, 
            [LoginListener::class, 'handle']
        );
    }
}
