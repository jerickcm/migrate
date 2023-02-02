<?php

namespace Jerickcm\Migrate\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class TestProvider extends ServiceProvider
{

    public function boot()
    {
	    $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        // $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }

    public function register()
    {

    }

}
