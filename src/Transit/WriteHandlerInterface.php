<?php
namespace Transit;

interface WriteHandlerInterface
{
    public function getTag($v);
    public function getRep($v);
}
