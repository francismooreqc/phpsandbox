<?php
/**
 * Created by PhpStorm.
 * User: francismoore
 * Date: 2015-10-13
 * Time: 21:00
 */

namespace PhpUnitSandbox;

require "ResourceProvider.php";

class FrenchResourceProvider implements ResourceProvider
{

    /**
     * FrenchResourceProvider constructor.
     */
    public function __construct()
    {
    }

    public function getHelloWorldMessage()
    {
        return $this->getHelloMessage() . " le monde!";
    }

    public function getHelloMessage()
    {
        return "Bonjour";
    }
}