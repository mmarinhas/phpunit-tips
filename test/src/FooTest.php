<?php

namespace Acme;

function time() { return 'stub'; }

class FooTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Foo
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Foo;
    }

    public function test_it_works() { 
        $result = (new Foo)->go();
        assertEquals($result, "stub");
        
        
    }
}
