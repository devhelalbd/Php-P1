<?php


    // $colors = array('Red', 'Green', 'Blue');
    $informations = [
        "Name" => "Helal",
        "Roll" => 22,
        "Role" =>"Web Developer"
    ];

    echo "<ul>";

    foreach($informations as $key => $info){
        // echo $key . ": " . $info . "<br/>";
        echo "<li>$key : $info</li>";
    }

    echo "</ul>";


?>