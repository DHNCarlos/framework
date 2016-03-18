<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Contracts\Routing\ResponseFactory
 */
class Response extends Facade
{
    const CLASSNAME = __CLASS__;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Illuminate\Contracts\Routing\ResponseFactory';
    }
}
