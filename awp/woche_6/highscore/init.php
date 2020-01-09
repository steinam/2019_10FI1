<?php

use Highscore\BL\Entry;
use Highscore\BL\Highscoremanagement;


    function autoloader($classname) {
        $lastSlash = strpos($classname, '\\')+1;
        $classname = substr($classname, $lastSlash);
        $directory = str_replace('\\', '/', $classname);
        $filename = __DIR__ .'/Highscore/' . $directory . '.php';
        require_once($filename);
      }

      spl_autoload_register('autoloader');

      $steinam = new Entry(100, 'steinam');

      $zobel = new Entry(0, 'Zobel');

      $zobel2 = new Entry(4342, 'Zobel2');
      $zobel3= new Entry(123, 'Zobel3');
      $zobel4 = new Entry(2345, 'Zobel4');
      $zobel5 = new Entry(164, 'Zobel5');
      $zobel6 = new Entry(45343, 'Zobel6');
      $zobel7 = new Entry(657, 'Zobel7');
      $zobel8 = new Entry(430, 'Zobel8');
      $zobel9 = new Entry(7670, 'Zobel9');
      $zobel10 = new Entry(96757, 'Zobel10');



//    echo($zobel->toString());
//    echo($steinam->toString());
      $HM = new Highscoremanagement(10);

      $HM->addEntry($steinam);
      $HM->addEntry($zobel);
      $HM->addEntry($zobel2);
      $HM->addEntry($zobel3);
      $HM->addEntry($zobel4);
      $HM->addEntry($zobel5);
      $HM->addEntry($zobel6);
      $HM->addEntry($zobel7);
      $HM->addEntry($zobel8);

      $HM->addEntry($zobel9);
      $HM->addEntry($zobel10);

      

      $sortedArray = $HM->HighscoreAusgabe();
      var_dump($sortedArray);


      $sortedArray[9] == 100;





      

    