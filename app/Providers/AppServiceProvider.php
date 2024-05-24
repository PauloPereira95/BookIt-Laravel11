<?php

namespace App\Providers;

use App\Repositories\Contracts\LibraryRepositoryInterface;
use App\Repositories\Eloquent\LibraryRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            LibraryRepositoryInterface :: class,
            LibraryRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
