<?php

namespace Illuminate\Foundation\Providers;

use Illuminate\Support\AggregateServiceProvider;

class FoundationServiceProvider extends AggregateServiceProvider
{
    const CLASSNAME = __CLASS__;
    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        FormRequestServiceProvider::CLASSNAME,
    ];
}
