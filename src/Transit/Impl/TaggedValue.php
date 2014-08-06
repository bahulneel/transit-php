<?php
namespace Transit\Impl;

class TaggedValue implements \Transit\TaggedValueInterface
{

    private $value;
    private $tag;

    public function __construct($tag, $value)
    {
        $this->tag = $tag;
        $this->value = $value;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function getValue()
    {
        return $this->value;
    }

}
