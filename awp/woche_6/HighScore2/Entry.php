<?php

class Entry{

    //public damit json_encode funktioniert oder
    //https://www.codebyamir.com/blog/object-to-json-in-php
    public $Name;
    public $Score;

    function __construct(string $n, int $s){

        $this->Name = $n;
        $this->Score = $s;
    }

    public function getName():string
    {
        return $this->Name;
    }

    public function getScore():int
    {
        return $this->Score;
    }
}