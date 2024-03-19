<?php

namespace Furqat\LaravelDebug\Commands;

use Illuminate\Console\Command;

class LaravelDebugCommand extends Command
{
    public $signature = 'laravel-debug';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
