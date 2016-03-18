<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\View\Compilers\BladeCompiler
 */
class Blade extends Facade
{
    const CLASSNAME = __CLASS__;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['view']->getEngineResolver()->resolve('blade')->getCompiler();
    }
}
