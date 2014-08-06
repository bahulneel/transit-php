<?php
namespace Transit\Impl\Emitter;

use Transit\EmiterInterface;

class NoOpEmitter implements EmiterInterface
{
    public function emit($data)
    {
        return $data;
    }
}
