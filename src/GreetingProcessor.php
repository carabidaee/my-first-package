<?php

declare(strict_types=1);

namespace AlexanderTolmachev\MyFirstPackage;

class GreetingProcessor
{
    public function getGreeting(string $name): string
    {
        return "Hello, $name!";
    }
}