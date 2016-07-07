<?php

namespace dam1r89\TranslatableMigration;

use Illuminate\Support\ServiceProvider;

class TranslatableMigrationServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->app->singleton('translatable.migration.creator', function ($app) {
            return new TranslatableMigrationCreator($app['files']);
        });

        $this->app->singleton('command.translatable.make.migration', function ($app) {
            return new TranslatableMigrateMakeCommand($app['translatable.migration.creator'], $app['composer']);
        });

        $this->commands('command.translatable.make.migration');
    }


}
