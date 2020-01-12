<?php

    namespace Hotel\BL;

    class Hotel{

        private $Name;
        private $Stars;
        private $rooms = array();



        public function __construct(string $n, int $s,  $rooms){

            $this->Name = $n;
            $this->Stars = $s;
            $this->rooms = $rooms;

        }


        //chekcIn retunr RoomNumber of given Room
        public function checkIn() : int
        {
            foreach($this->rooms as $room )
            {
                if($room->getAvailable() == true){
                    $room->setAvailable(false);
                    return $room->getNumber();
                }
            }
        }

        public function checkOut(int $roomNumber){

            $room = $this->rooms[$roomNumber];
            if($room->getNumber() == $roomNumber){
                $room->setAvailable(true);
            }
            else{
                //make it better
                return -1;
            }





        }
    }