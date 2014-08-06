<?php
namespace Transit\Impl;

use Transit\EmiterInterface;
use Transit\Impl\WriteHandler\NullHandler;

class WriterFactory
{
    public static function create(EmiterInterface $emiter, $customHandlers = [])
    {
        $handlers = new HandlerMap();
        $handlers->addHandler(gettype(null), new NullHandler);
        
        foreach ($customHandlers as $type => $handler) {
            $handlers->addHandler($type, $handler);
        }
        
        return new Writer($emiter, $handlers);
    }
}
