<?php

namespace Furqat\LaravelDebug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Furqat\LaravelDebug\LaravelDebug
 */
class LaravelDebug extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Furqat\LaravelDebug\LaravelDebug::class;
    }
}
