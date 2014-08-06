<?php
namespace Transit\Impl\Parser;

use Transit\ParserInterface;

class NoOpParser implements ParserInterface
{
    public function parse($data)
    {
        return $data;
    }
}
