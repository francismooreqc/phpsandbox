<?php

require "HelloWorld.php";

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testCanSayHelloWorld()
    {
        $resourceProviderStub = $this->getMockBuilder('PhpUnitSandbox\ResourceProvider')->getMock();
        $resourceProviderStub->method('getHelloWorldMessage')->willReturn('Hola mundo!');
        $sut = new PhpUnitSandbox\HelloWorld($resourceProviderStub);

        $answer = $sut->sayHello();

        $this->assertEquals("Hola mundo!", $answer);
    }
}
