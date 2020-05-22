<?php

class House
{
    public $address = '';
    public $price = 0;
    public $description = '';
    public $roomsAmount = 0;

    public function __construct($address, $price, $description, $roomsAmount)
    {
        $this->address = $address;
        $this->price = $price;
        $this->description = $description;
        $this->roomsAmount = $roomsAmount;

    }

    public function getSummaryLine()
    {

        $str = '<div>';
        $str .= '<ol>';
        $str .= '<li> Address: ' . $this->address . '</li>';
        $str .= '<li> Price: ' . $this->price . '</li>';
        $str .= '<li> Description: ' . $this->description . '</li>';
        $str .= '<li> RoomsAmount: ' . $this->roomsAmount . '</li>';
        $str .= '</ol>';
        $str .= '</div>';

        return $str;
    }

}
