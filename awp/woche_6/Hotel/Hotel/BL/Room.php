<?php

namespace Hotel\BL;

class Room
{
    private  $number;
    private $available;

    public function __construct(int $n)
    {
        $this->number = $n;
        //at beginning, a room is always available
        $this->available = true;
    }

    public function getNumber(): int
    {
        return $this->number;
    }


    public function getAvailable(): bool
    {
        return $this->available;
    }

    public function setAvailable(bool $state)
    {
        $this->available = $state;
    }



}