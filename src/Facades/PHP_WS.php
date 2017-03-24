<?php

namespace AndreiBu\php_websocket_client\Facades;

use Illuminate\Support\Facades\Facade;

class PHP_WS extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'PHP_WS';
    }
}
