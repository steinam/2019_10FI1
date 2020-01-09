<?php
require_once("Entry.php");

class ScoreManagement{

    private $HighScoreTable=array();
    private $HighScoreTable2=array();

    function __construct()
    {
        //Read from json-File
        $file = 'results.json';
        //Doesn't work, make it better later
        try{
            $json = @file_get_contents($file,0,null,null);
            $obj = json_decode($json);
            //$data = $obj->data;
            $this->HighScoreTable2 = $obj;
            //var_dump($obj);
        }
        catch (Exception $e) {
            // Handle exception
        }
    }

    function addEntry2(Entry $e)
    {
            $this->HighScoreTable2[] =  $e;
            $this->writeJSON();
    }


    function addOnly10Entryies(Entry $e){

        //when there are fewer than 10 entries at the moment
        if(count($this->HighScoreTable2) < 10)
        {
            //add it simply
            $this->HighScoreTable2[] =  $e;
        }
        else {
            //checkif Entry is greater than last Entry already in sorted List
            $this->getSortedHighScore();
            $lastEntry = $this->HighScoreTable2[9];
            if($lastEntry->getScore() < $e->getScore())
            {
                $this->HighScoreTable2[9] = $e;
            }
        }
        $this->writeJSON();
    }

    function addEntry(Entry $e)
    {
        //$data = new Entry($name, $wert);
        array_push($this->HighScoreTable, $e);
        //$this->writeJSON();
    }

    private function writeJSON()
    {
        //echo(json_encode($this->HighScoreTable2));

        $fp = fopen('results.json', 'w+');
        fwrite($fp, json_encode($this->HighScoreTable2));
        fclose($fp);
    }

    public function comparator($object1, $object2) {
        return $object1->Score > $object2->Score;
    }


    public function getSortedHighScore()
    {
       // $this->writeJSON();
        usort($this->HighScoreTable2, function( $a, $b) {
            return $a->Score < $b->Score;
        });
        var_dump($this->HighScoreTable2);
    }

}