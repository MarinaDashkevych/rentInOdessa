<?php

/*
type // тип объекта, может быть - hotel_room, apartment или house
address // адрес объекта, город, улица и номер в формате строки
price // цена суточной аренды объекта
description // описание
roomNumber // номер комнаты в отеле, такой элемент есть только в ассоциативных массивах с типом hotel_room
kitchen // Булево значение, описывает наличие кухни, такой элемент есть только в ассоциативных массивах с типом apartment
roomsAmount // кол-во комнат, такой элемент есть только в ассоциативных массивах с типом house
*/

$allRentsApartment = [
    [
        'type' => 'hotel_room',
        'address' => 'Odessa, Arcadia , 45',
        'price' => 1300,
        'description' => 'New hotel with beautiful seawieved ',
        'roomNumber' => 59,
    ],
    [
        'type' => 'apartment',
        'address' => 'Odessa, Shewchenko str, 63',
        'price' => 1500,
        'description' => 'Big apartment with big window ',
        'kitchen' => true,
    ],
    [
        'type' => 'house',
        'address' => 'Odessa,Micolaivska str, 78',
        'price' => 2300,
        'description' => 'New house with big yard ',
        'roomsAmount' => 4,
    ],
    [
        'type' => 'house',
        'address' => 'Odessa, Sovinion , 45',
        'price' => 1800,
        'description' => 'New house with beautiful seawieved ',
        'roomsAmount' => 2,
    ],
    [
        'type' => 'hotel_room',
        'address' => 'Odessa, Deribasivska str , 21',
        'price' => 1500,
        'description' => 'Hottel in the center ',
        'roomNumber' => 24,
    ],
    [
        'type' => 'house',
        'address' => 'Odessa, Krizhanivka, 63',
        'price' => 2800,
        'description' => ' Avesome house near the sea ',
        'roomsAmount' => 5,
    ],
    [
        'type' => 'appartment',
        'address' => 'Odessa, Lanjeron , 23 ',
        'price' => 1000,
        'description' => 'Cheap hotel with big bad',
        'kitchen' => true,
    ],
    [
        'type' => 'hotel_room',
        'address' => 'Odessa, Moldovanka , 21',
        'price' => 500,
        'description' => 'Cousy rooms',
        'roomNumber' => 3,
    ],
    [
        'type' => 'hotel_room',
        'address' => 'Odessa, Luzanovka , 68',
        'price' => 900,
        'description' => 'New hotel with new furniture ',
        'roomNumber' => 79,
    ],
    [
        'type' => 'apartment',
        'address' => 'Odessa, Arcadia',
        'price' => 3550,
        'description' => 'Lux apartment ',
        'kitchen' => true,
    ],
];


