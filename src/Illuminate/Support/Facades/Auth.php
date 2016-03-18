<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Auth\AuthManager
 * @see \Illuminate\Auth\Guard
 */
class Auth extends Facade
{
    const CLASSNAME = __CLASS__;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }
}
