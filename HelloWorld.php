<?php

namespace PhpUnitSandbox;

class HelloWorld
{

    /**
     * @var $_resourceProvider
     */
    private $_resourceProvider;

    public function __construct(ResourceProvider $resourceProvider)
    {
        $this->_resourceProvider = $resourceProvider;
    }

    public function sayHello()
    {
        return $this->_resourceProvider->getHelloWorldMessage();
    }

    public function sayHelloTo($personName)
    {
        return "{$this->_resourceProvider->getHelloMessage()} $personName";
    }
}