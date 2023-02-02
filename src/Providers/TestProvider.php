<?php

namespace Jerickcm\Migrate\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class TestProvider extends ServiceProvider
{

    public function boot()
    {


        // $this->loadMigrationsFrom(__DIR__.'../../database/migrations');
	    $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadMigrationsFrom(base_path() . '/vendor/jerickcm/migrate/src/database/migration');

        // if ($this->app->runningInConsole()) {
        //     if (!class_exists('CreatePostsTable')) {
        //         $this->publishes([
        //             __DIR__ . '/../database/migrations/create_posts_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_posts_table.php'),
        //         ], 'migrations');
        //     }
        // }

        // $this->loadViewsFrom(__DIR__.'/../views', 'inspire');

    }

    public function register()
    {

    }

}
