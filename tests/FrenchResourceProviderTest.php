<?php

require "FrenchResourceProvider.php";

/**
 * Created by PhpStorm.
 * User: francismoore
 * Date: 2015-10-13
 * Time: 20:58
 */
class FrenchResourceProviderTest extends PHPUnit_Framework_TestCase
{
    public function testGetHelloWorldMessage()
    {
        $frenchResourceProvider = new PhpUnitSandbox\FrenchResourceProvider();

        $helloWorldMessage = $frenchResourceProvider->getHelloWorldMessage();

        $this->assertEquals("Bonjour le monde!", $helloWorldMessage);
    }

    public function testGetHelloMessage()
    {
        $frenchResourceProvider = new PhpUnitSandbox\FrenchResourceProvider();

        $helloMessage = $frenchResourceProvider->getHelloMessage();

        $this->assertEquals("Bonjour", $helloMessage);
    }
}
