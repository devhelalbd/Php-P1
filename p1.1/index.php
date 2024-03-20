<?php 

    // for($i = 1; $i <= 10; $i++){
    //     echo $i . "<br/>";
    // }

    // switch case

    // $colors = "green";

    //  switch($colors){
    //     case "red":
    //         echo "Color is <strong>Red</strong>";
    //         break;
    //     case "black":
    //         echo "Color is <strong>Black</strong>";
    //         break;
    //     default:
    //         echo "Color not Match";
    //  }


    // while loop

    // $a = 1;
    // while($a <= 10){
    //     echo $a . "<br/>";
    //     $a++;
    // }

    // Multidimeshional array

    $info = array(
        array("1", "Helal", 11, 93, "Dhaka"),
        array("2", "Helal", 12, 93, "Dhaka"),
        array("3", "Helal", 13, 83, "Dhaka"),
        array("4", "Helal", 14, 73, "Dhaka"),
        array("5", "Helal", 15, 63, "Dhaka"),
        array("6", "Helal", 16, 33, "Dhaka"),
        array("7", "Helal", 17, 53, "Dhaka")
    );

    echo "<table border='1'>";

    echo '
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Class</th>
            <th>Roll</th>
            <th>District</th>
        </tr>
    ';

    for($row = 0; $row <= 6; $row++){
        echo "<tr>";
        for($col = 0; $col <= 4; $col++){
            echo "<td>". $info[$row][$col] ."</td>";
        }
        echo "</tr>";
    }

    echo "</table>";


    echo "<pre>";
        var_dump($info);
        print_r($info);
    echo "</pre>";

?>