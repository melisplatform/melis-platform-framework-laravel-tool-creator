<?php

namespace MelisPlatformFrameworkLaravelToolCreator\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\HtmlFacade;
use MelisPlatformFrameworkLaravel\Helpers\DataTableHelper;
use Collective\Html\FormFacade As Form;
use MelisPlatformFrameworkLaravel\Helpers\FieldRowHelper;
use MelisPlatformFrameworkLaravel\Helpers\ZendEvent;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

    }
}
