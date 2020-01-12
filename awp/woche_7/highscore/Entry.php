<?php

    namespace Highscore\BL;

    class Entry {

        private $Name;
        private $Point;


        public function __construct($point, string $n){

                $this->Name = $n;
                $this->Point = $point;
        }


      

        public function getPoint():int
        {
            return $this->Point;

        }

        public function toString(){

            return $this->Name . ", " . $this->Point;

        }



    }