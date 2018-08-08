<?php

namespace Rysh\BBCode;

use Illuminate\Support\ServiceProvider;

/**
 * Class BBCodeServiceProvider
 * @package Rysh\BBCode
 */
final class BBCodeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('bbcode', function () {
            return new BBCode();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['bbcode'];
    }
}
