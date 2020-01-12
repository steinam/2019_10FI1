<?php

    use Hotel\BL\Hotel;
    use Hotel\BL\Room;

    function autoloader($classname) {
        $lastSlash = strpos($classname, '\\')+1;
        $classname = substr($classname, $lastSlash);
        $directory = str_replace('\\', '/', $classname);
        $filename = __DIR__ .'/Hotel/' . $directory . '.php';
        require_once($filename);
      }

      spl_autoload_register('autoloader');


$r1 = new Room(1);
$r2 = new Room(2);
$r3 = new Room(3);
$r4 = new Room(4);



$rooms = [$r1->getNumber()=> $r1, $r2->getNumber() => $r2, $r3->getNumber() => $r3, $r4->getNumber() => $r4 ];
var_dump($rooms);

$Steigerwald = new Hotel('Steigerwald', 4, $rooms);
$Steigerwald->checkIn();

var_dump($rooms);

$Steigerwald->checkOut(1);

var_dump($rooms);





