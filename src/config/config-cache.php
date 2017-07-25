<?php

return [

    /**
     * The name of the key where the config is stored in cache
     */
    'cache_key' => 'config_cache',

    /**
     * Expiration time for the config in cache
     */
    'cache_expiration_time' => 60*24, // One day

    /**
     * The config files (app, database, queue, etc.) to be cached
     * Add to this array whatever config files you want to load in cache
     */
    'config_files' => [
        'app',
    ],

];
