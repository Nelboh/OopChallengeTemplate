<?php

namespace App\Marsupials;

class Wombat
{
    private $name;
    private $hugs = 0;

    // construct
    public function __construct (string $name)
    {
        $this->name = $name;
    }

    // method getName
    public function getName() : string
    {
        return $this->name;
    }

    // method sayHelloTo
    public function sayHelloTo(Wombat $wombat) : string
    {
        return "Hello" . " " . $wombat->getName();
    }

    //method giveHug
    public function giveHug() : Wombat
    {
        $this->hugs += 1;
        return $this;
    }
    
    //method howManyHugs
    public function howManyHugs() : int
    {
        return $this->hugs;
    }
}


