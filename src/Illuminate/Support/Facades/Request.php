<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Http\Request
 */
class Request extends Facade
{
    const CLASSNAME = __CLASS__;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'request';
    }
}
