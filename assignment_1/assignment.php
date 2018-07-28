<?php
$shirt = 450;
$pant = 800;
$panjabi = 600;

//single value start

 if ($shirt <= 500) {
     echo ("Buy the Shirt! <br>");
 } else {
     echo ("This Shirt price is too high, Choice another one! <br>");
 }

 if ($pant <= 600) {
    echo ("Buy the Pant! <br>");
} else {
    echo ("This Pant price is too high, Choice another one! <br>");
}

if ($panjabi <= 550) {
    echo ("Buy the Panjabi! <br>");
} else {
    echo ("This Panjabi price is too high, Choice another one! <br>");
}
 // single value end


 // multiple value start
 if ($shirt + $pant + $panjabi <= 1600) {
     echo ("Buy all Three items ! <br>");
 } else {
     echo ("Price is too HIGH, Go another Shop! <br>");
 }
 // multiple value end


 //switch statement start

 $favcolor = "blue";
 $favvehicle = "bike";
 $favsports = "cricket";
 $favfood = "nodles";

 switch ($favcolor) {
     case "blue";
     echo "My favorite color is blue! <br>";
     break;
     case "read";
     echo "My favorite color is red! <br>";
     break;
     case "green";
     echo "My favorite color is green! <br>";
     break;
     default;
     echo "My favorite color is neiter red, blue nor green! <br>";
}

 switch ($favvehicle) {
    case "car";
    echo "My favorite vehicle is car! <br>";
    break;
    case "train";
    echo "My favorite vehicle is train! <br>";
    break;
    case "bike";
    echo "My favorite vehicle is bike! <br>";
    break;
    default;
    echo "My favorite vehicle is neiter car, train nor bike! <br>";
}

 switch ($favsports) {
    case "cricket";
    echo "My favorite sports is cricket! <br>";
    break;
    case "football";
    echo "My favorite sports is football! <br>";
    break;
    case "hockey";
    echo "My favorite sports is hockey! <br>";
    break;
    default;
    echo "My favorite sports is neiter cricket, football nor hockey! <br>";
}

 switch ($favfood) {
    case "briyani";
    echo "My favorite food is briyani! <br>";
    break;
    case "burger";
    echo "My favorite food is burger! <br>";
    break;
    case "pizza";
    echo "My favorite food is pizza! <br>";
    break;
    default;
    echo "My favorite food is neiter briyani, burger nor pizza! <br>";
}

 //switch statement start

?>