<?php

namespace App\Providers;

use App\Repositories\Transaksi;
use App\Repositories\TransaksiInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            TransaksiInterface::class,
            Transaksi::class,
        );
    }
}
