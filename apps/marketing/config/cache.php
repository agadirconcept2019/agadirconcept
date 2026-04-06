<?php

declare(strict_types=1);

return [
    'default' => env('CACHE_STORE', 'database'),
    'stores' => [
        'array' => ['driver' => 'array', 'serialize' => false],
        'database' => ['driver' => 'database', 'table' => 'cache', 'connection' => null],
        'file' => ['driver' => 'file', 'path' => storage_path('framework/cache/data')],
    ],
    'prefix' => env('CACHE_PREFIX', 'agadir_marketing_cache'),
];
