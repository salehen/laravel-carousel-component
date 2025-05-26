<?php

namespace Vendor\CarouselComponent;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CarouselServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'carousel');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/carousel'),
        ], 'carousel-views');

        Blade::component('carousel::carousel', 'carousel');
    }

    public function register(): void
    {
        //
    }
}
