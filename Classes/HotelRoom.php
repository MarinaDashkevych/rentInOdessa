<?php


class HotelRoom
{
    public $address = '';
    public $price = 0;
    public $description = '';
    public $roomNumber = '';


    public function __construct($address, $price, $description, $roomNumber){
        $this->address = $address;
        $this->price = $price;
        $this->description = $description;
        $this->roomNumber =$roomNumber;
    }

    public function getSummaryLine(){

        $str = '<div>';
        $str .= '<ol>';
        $str .= '<li> Address: '. $this->address . '</li>';
        $str .= '<li> Price: '. $this->price . '</li>';
        $str .= '<li> Description: ' . $this->description . '</li>';
        $str .= '<li> RoomNumber : '. $this->roomNumber  . '</li>';
        $str .= '</ol>';
        $str .= '</div>';


        return $str;

    }
}