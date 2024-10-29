<?php

namespace goubs\FilamentLaravelContacts\Commands;

use Illuminate\Console\Command;

class FilamentLaravelContactsCommand extends Command
{
    public $signature = 'filament-laravel-contacts';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
