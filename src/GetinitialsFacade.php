<?php

namespace Getinitials\Getinitials;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Getinitials\Getinitials\Skeleton\SkeletonClass
 */
class GetinitialsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'getinitials';
    }
}
