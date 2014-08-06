<?php
namespace Transit\Impl\ReadHandler;

use Transit\ReadHandlerInterface;

class NullHandler implements ReadHandlerInterface
{
    public function fromRep($rep)
    {
        return null;
    }
}
