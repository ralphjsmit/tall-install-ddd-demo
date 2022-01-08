<?php

namespace Support\App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::component('layouts.app', \Support\View\Components\Layouts\App::class);
        Blade::component('layouts.admin', \Support\View\Components\Layouts\Admin::class);
    }
}
