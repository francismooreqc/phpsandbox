<?php

require "HelloWorld.php";

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testCanSayHelloWorld()
    {
        $resourceProviderStub = \Mockery::mock('PhpUnitSandbox\ResourceProvider');
        $resourceProviderStub->shouldReceive('getHelloWorldMessage')->andReturn('Hola mundo!');
        $sut = new PhpUnitSandbox\HelloWorld($resourceProviderStub);

        $answer = $sut->sayHello();

        $this->assertEquals("Hola mundo!", $answer);
    }

    /**
     * @dataProvider canSayHelloToSomenoneProvider
     * @param $personName
     * @param $expected
     */
    public function testCanSayHelloToSomeone($salutation, $personName, $expected)
    {
        $resourceProviderStub = \Mockery::mock('PhpUnitSandbox\ResourceProvider');
        $resourceProviderStub->shouldReceive('getHelloMessage')->andReturn($salutation);
        $sut = new PhpUnitSandbox\HelloWorld($resourceProviderStub);

        $answer = $sut->sayHelloTo($personName);

        $this->assertEquals($expected, $answer);

    }

    public function canSayHelloToSomenoneProvider()
    {
        return [
            ['Hola', 'Francis', 'Hola Francis'],
            ['Hola', 'Stéphan', 'Hola Stéphan'],
            ['Bonjour', 'Stéphan', 'Bonjour Stéphan'],
        ];
    }
}
