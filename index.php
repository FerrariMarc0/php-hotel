<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

/* for($i = 0; $i < count($hotels); $i++){
    $hotel= $hotels[$i];
    echo $hotel['name'];
    echo $hotel['parking'];
    echo $hotel['vote'];
    echo $hotel['distance_to_center'];
    echo '<hr>';
} */
/* foreach ($hotels as $hotel){
    echo $hotel['name'];
    echo $hotel['parking'];
    echo $hotel['vote'];
    echo $hotel['distance_to_center'];
    echo '<hr>';
} */
var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <header>
        <h1 class="text-center">PHP Hotels</h1>
    </header>
    <main>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Info</th>
                        <?php foreach($hotels as $hotel) { ?>
                        <th><?php echo $hotel['name']; ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>Descrizione:</td>
                        <?php foreach($hotels as $hotel) { ?>
                        <td><?php echo $hotel['description']; ?></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>Distanza dal centro città:</td>
                        <?php foreach($hotels as $hotel) { ?>
                        <td><?php echo $hotel['distance_to_center']; ?> Km</td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>voto:</td>
                        <?php foreach($hotels as $hotel) { ?>
                        <td><?php echo $hotel['vote']; ?></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>Parcheggio:</td>
                        <?php foreach($hotels as $hotel) { ?>
                        <td><?php echo $hotel['parking']; ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>