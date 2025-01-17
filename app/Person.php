<?php

namespace App;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName() : string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function sayHelloTo($person) : string
    {
        return "Hello" . " " . $person->getFullName();
    }
}