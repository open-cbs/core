<?php

namespace Opencbs\Core\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Opencbs\Core\Core
 */
class Core extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Opencbs\Core\Core::class;
    }
}
