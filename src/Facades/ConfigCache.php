<?php

namespace Orumad\ConfigCache\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Orumad\ConfigCache\ConfigCache
 */
class ConfigCache extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lumen-config-cache';
    }
}
