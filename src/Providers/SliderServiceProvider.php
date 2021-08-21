<?php
namespace Ponditcommerce\Slider\Providers;

use Illuminate\Support\ServiceProvider;
use Ponditcommerce\Slider\Slider;

class SliderServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register a class in the service container
        // $this->app->bind('slider', function ($app) {
        //     return new Slider();
        // });
        $this->app->bind('Slider', \Ponditcommerce\Slider\Slider::class);
    }

    public function boot()
    {
    }
}
