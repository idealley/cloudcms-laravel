<?php namespace Idealley\CloudCms\Facades;

use Illuminate\Support\Facades\Facade;

class CloudCms extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return  string
     */
    protected static function getFacadeAccessor() { return 'cloudcms'; }

    /**
     * Get the root object behind the facade.
     *
     * @return \Incraigulous\ContentfulSDK\ManagementSDK
     */
    public static function getFacadeRoot()
    {
        return static::resolveFacadeInstance(static::getFacadeAccessor());
    }
}