<?php

namespace Jerickcm\Migrate\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class TestProvider extends ServiceProvider
{

    public function boot()
    {

        // $this->loadMigrationsFrom(__DIR__.'../../database/migrations');
        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // $this->loadMigrationsFrom(base_path() . '/vendor/jerickcm/migrate/database/migration');
        // $this->loadViewsFrom(__DIR__.'/../views', 'inspire');

        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        if ($this->app->runningInConsole()) {
            if (!class_exists('CreatePostsTable')) {
                $this->publishes([
                    base_path() . '/vendor/jerickcm/migrate/stub/create_posts_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_posts_table.php'),
                ], 'migrations');
            }
        }
    }

    public function register()
    {
    }

}
