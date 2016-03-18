<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Filesystem\FilesystemManager
 */
class Storage extends Facade
{
    const CLASSNAME = __CLASS__;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filesystem';
    }
}
