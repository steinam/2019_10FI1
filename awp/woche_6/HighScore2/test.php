<?php

require_once("Entry.php");
require_once("ScoreManagement.php");

$scorem = new ScoreManagement();
$e = new Entry("wallner", 13324);
$f = new Entry("schellenberger", 1224);
$g = new Entry("Sych", 1224333);
$h = new Entry("Hinz", 1);
$i = new Entry("troester", 1323324);
$j = new Entry("zilles", 1276524);
$k = new Entry("steinam", 125424333);
$l = new Entry("zobel", 164566775);
$m = new Entry("scheiner", 1334424);
$n = new Entry("beier", 12124324);
$o = new Entry("lange", 122454333);
$p = new Entry("wiesinger", 7636383);

//Hinz, Schellenberger, Wallner, Sych
//Sych, Wallner, Schellenberger, Hinz


$scorem->addEntry2($e);
$scorem->addEntry2($f);
$scorem->addEntry2($g);
$scorem->addEntry2($h);
$scorem->addOnly10Entryies($i);
$scorem->addOnly10Entryies($j);
$scorem->addOnly10Entryies($k);
$scorem->addOnly10Entryies($l);
$scorem->addOnly10Entryies($m);
$scorem->addOnly10Entryies($n);
$scorem->addOnly10Entryies($o);
$scorem->addOnly10Entryies($p);


$scorem->getSortedHighScore();


