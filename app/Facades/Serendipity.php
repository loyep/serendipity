<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool exists(string $view)
 */
class Serendipity extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'serendipity';
    }
}
