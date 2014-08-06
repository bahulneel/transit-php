<?php
namespace Transit;

use PHPUnit_Framework_TestCase;
use Transit\Impl\Emitter\NoOpEmitter;
use Transit\Impl\Parser\NoOpParser;
use Transit\Impl\Reader;
use Transit\Impl\Writer;

class GroundTypesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Writer
     */
    private $writer;
    
    /**
     * @var Reader
     */
    private $reader;

    public function setUp()
    {
        parent::setUp();
        
        $this->writer = TransitFactory::writer(new NoOpEmitter);
        $this->reader = TransitFactory::reader(new NoOpParser);
    }
    
    /**
     * @param mixed $v
     * 
     * @return TaggedValueInterface
     */
    public function assertTaggedValue($v)
    {
        $this->assertInstanceOf('Transit\TaggedValueInterface', $v);
        return $v;
    }

    public function testWriteNull()
    {
        $v = $this->assertTaggedValue($this->writer->write(null));
        $this->assertEquals('_', $v->getTag());
        $this->assertEquals(null, $v->getValue());
    }
    
    public function testReadNull()
    {
        $v = $this->writer->write(null);
        $this->assertEquals(null, $this->reader->read($v));
    }
}
