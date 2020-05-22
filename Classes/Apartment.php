<?php


class Apartment
{
    public $address = '';
    public $price = 0;
    public $description = '';
    public $kitchen = false;


    public function __construct($address, $price, $description, $kitchen){
        $this->address = $address;
        $this->price = $price;
        $this->description = $description;
        $this->kitchen = $kitchen;

    }

    public function getSummaryLine(){

            $kitchen = 'No';
            if($this->kitchen){
                $kitchen = 'Yes';
            }

            $str = '<div>';
            $str .= '<ol>';
            $str .= '<li> Address: '. $this->address . '</li>';
            $str .= '<li> Price: '. $this->price . '</li>';
            $str .= '<li> Description: ' . $this->description . '</li>';
            $str .= '<li> Kitchen : '. $kitchen . '</li>';
            $str .= '</ol>';
            $str .= '</div>';

            return $str;
    }
}