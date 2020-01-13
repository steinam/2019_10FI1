<?php

class Item
{
    protected $title;
    public function __construct(string $t){
        $this->title = $t;
    }


    public function makemyDay()
    {

    }


    public function print()
    {
        echo ($this->title);
    }
}

class CD extends Item{
    private $artist;
    public function __construct(string $a, string $t){
        $this->artist = $a;
        parent::__construct($t);
    }
    public function print()
    {
        echo $this->title . ": " . $this->artist;
    }

    public function makemyDay()
    {
        echo "Hasta La Vista Baby";
    }
}

class DVD extends Item{
    private $director;
    public function __construct(string $d, string $t){
        $this->director = $d;
        parent::__construct($t);
    }
    public function print()
    {
        echo $this->title . ": " . $this->director;
    }
}

$DireStraits = new CD('DireStraits', 'Money for nothing');
$TopGun = new DVD('Tom Cruise', 'TopGun');

//                           Vertrag
function MedienInfosAusgeben(Item $e)
{
    echo ($e->print());
    echo ($e->makemyDay());
}

MedienInfosAusgeben($DireStraits);
MedienInfosAusgeben($TopGun);

