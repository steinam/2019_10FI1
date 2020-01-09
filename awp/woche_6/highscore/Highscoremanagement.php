<?php

namespace Highscore\BL;

class Highscoremanagement{

    private $Highscoretable;

    public function __construct(int $Length){
        $this->Highscoretable = array($Length);
    }

    public function addEntry(Entry $e){

        if(count($this->Highscoretable) < 10){
            $this->Highscoretable[] = $e;
        }
        else{
            echo("Vor dem Erstzen");
            var_dump($this->Highscoretable);

            $this->sort();
            
            echo("Nach dem Erstzen");
            var_dump($this->Highscoretable);


            if(($this->Highscoretable[9])->getPoint() < $e->getPoint()){

                $this->Highscoretable[9]= $e; 
            }
        }
    }


    public function HighscoreAusgabe()
    {
        $this->sort();
        return $this->Highscoretable;
    }

    private function sort()
    {
        usort($this->Highscoretable, function($a, $b){
            return $a->getPoint() < $b->getPoint();
        });
    }


}