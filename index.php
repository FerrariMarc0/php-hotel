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
/* var_dump($hotels); */

$filtered_hotels= $hotels;

if(!empty($_GET['parking'])){
    $temp_hotels= [];
    foreach($filtered_hotels as $hotel){
        if($hotel['parking']){
            $temp_hotels[]= $hotel;
        }
    }
    $filtered_hotels= $temp_hotels;
}

if(!empty($_GET['vote'])){
    $temp_hotels= [];
    foreach($filtered_hotels as $hotel){
        if($hotel['vote'] >= $_GET['vote']){
            $temp_hotels[]= $hotel;
        }
    }
    $filtered_hotels= $temp_hotels;
}
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
    <header class="p-5">
        <h1 class="text-center mb-5">PHP Hotels</h1>
    </header>
    <main>
        <form class="mb-3 d-flex gap-5" method="GET">
            <div class="form-check w-25 px-5">
                <label class="form-check-label" for="parking">Hotel con parcheggio</label>
                <input class="form-check-input" type="checkbox" value="1" name="parking">
            </div>
            <div class="gap-2 d-flex">
                <label for="vote">Filtra per voto:</label>
                <select class="form-select form-select-sm mb-3 w-25 h-100" multiple aria-label="multiple select example">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                
            </div>
            <button class="h-25 rounded px-2 py-1 bg-success text-light border-0" type="submit">Filtra</button>
        </form>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Hotel</th>
                        <th>Descrizione</th>
                        <th>Parcheggio</th>
                        <th>Voto</th>
                        <th>Distanza dal centro città</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($hotels as $hotel):?>
                        <tr>
                            <td><?php echo $hotel['name']; ?></td>
                            <td><?php echo $hotel['description']; ?></td>
                            <td><?php echo $hotel['parking'] === true ? 'Yes' : 'None'; ?></td>
                            <td><?php echo $hotel['vote']; ?></td>
                            <td><?php echo $hotel['distance_to_center']; ?> km</td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
<?php
