<?php
namespace Transit\Impl;

use Transit\EmiterInterface;
use Transit\WriteHandlerInterface;

class Writer
{
    /**
     *
     * @var HandlerMap
     */
    private $handlers;
    
    /**
     * @var EmiterInterface
     */
    private $emiter;

    public function __construct(EmiterInterface $emiter, HandlerMap $handlers)
    {
        $this->handlers = $handlers;
        $this->emiter = $emiter;
    }
    
    public function write($data)
    {
        $handler = $this->handlers->getHandler($data);
        /* $handler \Transit\WriteHandlerInterface */
        $tag = $handler->getTag($data);
        $rep = $handler->getRep($data);
        
        $tagged = new TaggedValue($tag, $rep);
        return $this->emiter->emit($tagged);
    }
}
