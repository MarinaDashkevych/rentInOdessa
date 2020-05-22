<?php


class HtmlWriter
{
    public function writeHtmlHotelRoom(HotelRoom $room)
    {
        $str = '<div>';
        $str .= '<ol>';
        $str .= '<li> Address: ' . $room->address . '</li>';
        $str .= '<li> Price: ' . $room->price . '</li>';
        $str .= '<li> Description: ' . $room->description . '</li>';
        $str .= '<li> RoomNumber : ' . $room->roomNumber . '</li>';
        $str .= '</ol>';
        $str .= '</div>';

        return $str;
    }

    public function writeHtmlApartment(Apartment $apartment)
    {

        $kitchen = 'No';
        if ($apartment->kitchen) {
            $kitchen = 'Yes';
        }

        $str = '<div>';
        $str .= '<ol>';
        $str .= '<li> Address: ' . $apartment->address . '</li>';
        $str .= '<li> Price: ' . $apartment->price . '</li>';
        $str .= '<li> Description: ' . $apartment->description  . '</li>';
        $str .= '<li> Kitchen : ' . $kitchen . '</li>';
        $str .= '</ol>';
        $str .= '</div>';

        return $str;
    }

    public function writeHtmlHouse(House $house)
    {
        $str = '<div>';
        $str .= '<ol>';
        $str .= '<li> Address: ' . $house->address . '</li>';
        $str .= '<li> Price: ' . $house->price . '</li>';
        $str .= '<li> Description: ' . $house->description . '</li>';
        $str .= '<li> RoomsAmount: ' . $house->roomsAmount . '</li>';
        $str .= '</ol>';
        $str .= '</div>';

        return $str;
    }
}