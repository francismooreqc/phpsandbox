<?php

namespace PhpUnitSandbox;

class HelloWorld
{

    /**
     * @var ResourceProvider
     */
    private $resourceProvider;

    public function __construct(ResourceProvider $resourceProvider)
    {
        $this->resourceProvider = $resourceProvider;
    }

    public function sayHello()
    {
        return $this->resourceProvider->getHelloWorldMessage();
    }
}