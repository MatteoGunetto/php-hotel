<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => "Benvenuto nell'hotel di lusso, un'oasi di eleganza e raffinatezza. Questo splendido hotel è progettato per offrire un'esperienza di soggiorno indimenticabile",
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ], [
            'name' => 'Hotel Futuro',
            'description' => "Hotel super lusso che ti descrivo è un vero gioiello dell'ospitalità di lusso, dedicato a coloro che cercano un'esperienza indimenticabile nel massimo comfort",
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ], [
            'name' => 'Hotel Rivamare',
            'description' => "Un'incantevole oasi di relax e serenità, affacciato sulle acque cristalline di un'oceanica spiaggia",
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ], [
            'name' => 'Hotel Bellavista',
            'description' => "Immerso in un panorama pittoresco e circondato da maestose vette e una natura incontaminata",
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ], [
            'name' => 'Hotel Milano',
            'description' => "Situato in una posizione centrale, offre un facile accesso alle principali attrazioni, ai ristoranti, ai negozi",
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];    
//    echo "<pre>";
//    var_dump($hotels);
//    echo "</pre>";
?>
    <?php
        // echo "<ul>";
        //     foreach ($hotels as $hotel)
        //         foreach ($hotel as $key)
        //         echo "<li>" .$key ."</li>";
        // echo "</ul>";
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>php-hotel</title>
    </head>
    <body>
    <?php   
        echo '<table class="table">
                <thead>
                    <tr>
                        <th class="table-success" scope="col">Name</th>
                        <th  scope="col">Description</th>
                        <th class="table-info" scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th class="table-warning" scope="col">Distance</th>
                    </tr>
                </thead>
                <tbody>';
        foreach ($hotels as $key => $hotel) {

            echo '<tr>
                    <th  class="table-success "scope="row">' . $hotel["name"] . '</th>'
                . '<td>' . $hotel["description"] . '</td>'
                . '<td class="table-info">' . $hotel["parking"] . '</td>'
                . '<td>' . $hotel["vote"] . '</td>'
                . '<td class="table-warning">' . $hotel["distance_to_center"] . ' km' . '</td>'
                . '</tr>';
        };

        echo '</tbody>'
            .  '</table>';

    ?>
    </body>
</html>