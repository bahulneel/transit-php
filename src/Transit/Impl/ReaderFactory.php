<?php
namespace Transit\Impl;

use Transit\Impl\ReadHandler\NullHandler;
use Transit\ParserInterface;

class ReaderFactory
{
    public static function create(ParserInterface $parser, $customHandlers = [])
    {
        $handlers = new HandlerMap();
        $handlers->addHandler("_", new NullHandler);
        
        foreach ($customHandlers as $tag => $handler) {
            $handlers->addHandler($tag, $handler);
        }
        
        return new Reader($parser, $handlers);
    }
}
