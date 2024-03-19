<?php

namespace Furqat\LaravelDebug;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Furqat\LaravelDebug\Commands\LaravelDebugCommand;

class LaravelDebugServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-debug')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-debug_table')
            ->hasCommand(LaravelDebugCommand::class);
    }
}
