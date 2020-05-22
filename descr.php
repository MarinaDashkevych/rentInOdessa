<?php
require_once 'catalog.php';
require_once 'classes/HtmlWriter.php';
require_once 'classes/House.php';
require_once 'classes/Apartment.php';
require_once 'classes/HotelRoom.php';

$id = ($_GET['id']);

$apartmentsObj = null;
    switch ($allRentsApartment[$id]['type']){
        case "hotel_room":
            $apartmentsObj = new HotelRoom($allRentsApartment[$id]['address'],
                $allRentsApartment[$id]['price'],$allRentsApartment[$id]['description'],
                $allRentsApartment[$id]['roomNumber']);
            break;

        case "house":
            $apartmentsObj = new House($allRentsApartment[$id]['address'],
                $allRentsApartment[$id]['price'], $allRentsApartment[$id]['description'],
                $allRentsApartment[$id]['roomsAmount']);
            break;

        case "Apartment":
            $apartmentsObj = new Apartment($allRentsApartment[$id]['address'],
                [$id]['price'], $allRentsApartment[$id]['description'], $allRentsApartment[$id]['kitchen']);
            break;
}
if(is_null($apartmentsObj)){
    header('Location:index.php');
    die();
}
$htmlWriter = new HtmlWriter();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php switch ($allRentsApartment[$id]['type']):
        case "hotel_room":?>
                <?= $htmlWriter->writeHtmlHotelRoom($apartmentsObj); ?>
                <?php break;?>

        <?php case "apartment":?>
        <?=$htmlWriter->writeHtmlApartment($apartmentsObj); ?>
        <?php break;?>


    <?php case "house":?>
          <?=$htmlWriter->writeHtmlHouse($apartmentsObj); ?>
          <?php break;?>


        <?php endswitch;?>


</body>
</html>
