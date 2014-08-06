<?php
namespace Transit\Impl\WriteHandler;

use Transit\WriteHandlerInterface;

class NullHandler implements WriteHandlerInterface
{
    public function getRep($v)
    {
        return null;
    }

    public function getTag($v)
    {
        return "_";
    }
}
