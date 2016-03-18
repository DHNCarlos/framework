<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Queue\QueueManager
 * @see \Illuminate\Queue\Queue
 */
class Queue extends Facade
{
    const CLASSNAME = __CLASS__;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'queue';
    }
}
