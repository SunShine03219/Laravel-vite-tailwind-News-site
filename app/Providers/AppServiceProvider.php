<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Component::macro('notify', function ($message, $title = '', $type = 'success') {
            $this->dispatchBrowserEvent('notify', ['message' => $message, 'title' => $title, 'type' => $type]);
        });
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}