<?php
namespace Transit;

use Transit\Impl\ReaderFactory;
use Transit\Impl\WriterFactory;

class TransitFactory
{
    public static function writer(EmiterInterface $emiter, $handlers = array())
    {
        return WriterFactory::create($emiter, $handlers);
    }
    
    public static function reader(ParserInterface $parser, $handlers = array())
    {
        return ReaderFactory::create($parser, $handlers);
    }
}
