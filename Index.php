<?
require_once 'catalog.php';
require_once 'classes/House.php';
require_once 'classes/Apartment.php';
require_once 'classes/HotelRoom.php';

$apartmentsObj = [];

foreach ($allRentsApartment as $key => $apartmentsArr) {
    switch ($apartmentsArr['type']) {
        case "hotel_room":
            $apartmentsObj[] = new HotelRoom($apartmentsArr['address'],
                $apartmentsArr['price'], $apartmentsArr['description'], $apartmentsArr['roomNumber']);
            break;

        case "house":
            $apartmentsObj[] = new House($apartmentsArr['address'],
                $apartmentsArr['price'], $apartmentsArr['description'], $apartmentsArr['roomsAmount']);
            break;

        case "apartment":
            $apartmentsObj[] = new Apartment($apartmentsArr['address'],
                $apartmentsArr['price'], $apartmentsArr['description'], $apartmentsArr['kitchen']);
            break;

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RENT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>

<body>
<div>
        <?php foreach ($apartmentsObj as $key => $apartmentsArr): ?>
            <?=$apartmentsArr->getSummaryLine()?>
            <a href="descr.php?id=<?=$key?>">Details</a>
            <br>

        <?php endforeach ?>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
</html>


