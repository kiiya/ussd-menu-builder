<?php

namespace Kiiya\UssdMenuBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kiiya\UssdMenuBuilder\Skeleton\SkeletonClass
 */
class UssdMenuBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ussd-menu-builder';
    }
}
