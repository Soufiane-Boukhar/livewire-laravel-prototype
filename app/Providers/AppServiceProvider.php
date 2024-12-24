<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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
        Livewire::component('package.component-name', \App\Livewire\posts\PostCreate::class);
        Livewire::component('package.component-name', \App\Livewire\posts\PostManager::class);
        Livewire::component('package.component-name', \App\Livewire\tasks\TaskManager::class);
        Livewire::component('package.component-name', \App\Livewire\tasks\CreateTask::class);

    }
}
