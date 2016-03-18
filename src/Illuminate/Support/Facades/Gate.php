<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Contracts\Auth\Access\Gate
 */
class Gate extends Facade
{
    const CLASSNAME = __CLASS__;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Illuminate\Contracts\Auth\Access\Gate';
    }
}
