<?php

namespace CorneelD\FilamentMediaLibrary\Commands;

use Illuminate\Console\Command;

class FilamentMediaLibraryCommand extends Command
{
    public $signature = 'filament-media-library';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
