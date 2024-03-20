<?php

// Default
// Associative Array 
// Multidimensional Array

//     $fruits = ["Mangga", "Berry", "Kiwi" ];



//    foreach ($fruits as $fruit) {
//       echo  $fruit;
//       echo '<br>';
//    } 


// $dinos = [
//     "dinoName" => "Rex" ,
//     "dinoAge"  => 500,
//     "isMarried"=> "false"
// ];

// foreach ($dinos as $dino) {
//     echo $dino;
//     echo '<br>';
// }


$dinos = [
    [
        "dinoName" => "Rex" ,
        "dinoAge"  => 500
    ],
    [
        "dinoName" => "Bracio" ,
        "dinoAge"  => 800
    ],
    [
        "dinoName" => "Ptera" ,
        "dinoAge"  => 250
    ]
];

foreach ($dinos as $dino) {
    echo $dino["dinoName"];
    echo $dino["dinoAge"];
    echo '<br>';
}

?>