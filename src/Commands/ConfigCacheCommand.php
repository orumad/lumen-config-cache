<?php

namespace Orumad\ConfigCache\Commands;

use Illuminate\Console\Command;
use Orumad\ConfigCache\Facades\ConfigCache;

class ConfigCacheCommand extends Command
{
    protected $signature = 'lumen-config:cache';

    protected $description = 'Loads (or refreshes) the config files into the cache';

    public function handle()
    {
        $this->msg();
        ConfigCache::refresh();
        $this->info("Config files cached!! 👏👏");
        $this->msg();
    }

    /**
     * Shows a message in screen
     * @param  string $msg (optional)
     */
    private function msg($msg = null)
    {
        if ($msg) {
            $this->line($msg);
        }

        $this->line("");
    }

}
