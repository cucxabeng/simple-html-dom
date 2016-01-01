<?php

namespace cucxabeng\HtmlDom;

use Illuminate\Support\ServiceProvider;

class HtmlDomServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('htmldom', function()
        {
            return new HtmlDom;
        });
    }
}
