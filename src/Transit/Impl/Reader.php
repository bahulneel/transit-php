<?php
namespace Transit\Impl;

use Transit\ParserInterface;

class Reader
{

    /**
     * @var HandlerMap
     */
    private $handlers;

    /**
     * @var ParserInterface
     */
    private $parser;

    public function __construct(ParserInterface $parser, HandlerMap $handlers)
    {
        $this->handlers = $handlers;
        $this->parser = $parser;
    }

    public function read($v)
    {
        $tagged = $this->parser->parse($v);
        $tag = $tagged->getTag();
        $value = $tagged->getValue();
        
        $handler = $this->handlers->getHandlerByName($tag);
        return $handler->fromRep($value);
    }

}
