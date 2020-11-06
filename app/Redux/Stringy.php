<?php

namespace App\Redux;

class Stringy
{
    private $string;
    

    // make constructor here 
    public function __construct ($string)
    {
        $this->string = $string;
    }

    // "lower" method - make lower case
    public function lower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    // "repeat" method - repeat X times, no space
    public function repeat($number) 
    {
        str_repeat($this->string, $repeat);
        return $this; 
        
    }

    // "upper" method - make upper case
    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    // "append" method - stick to string
    public function append(str $moreStrings)
    {
        $this->string .= $moreStrings;
        return $this;
    }

    // "get" method for final result
    public function get()
    {
        return $this->string;
    }



}