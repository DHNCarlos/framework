<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\View\Factory
 */
class View extends Facade
{
    const CLASSNAME = __CLASS__;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}
