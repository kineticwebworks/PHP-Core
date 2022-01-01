<?php 

// Whole Loop
    $data = 1;
    while($data <=5){
        echo $data . "<br>";
        $data++;
    }

echo "<hr>";
// Do Whole 

    do{
        echo $data . "<br>";
        $data++;
    }
    while($data <=5);

echo "<hr>";
// For Loop

    for($d=0;$d<=5;$d++){
        echo $d . "<br>";
    }

echo "<hr>";;

// For Each Loop
    $arr = ["a"=>"H1","b"=>"H2","c"=>"H3"];
    foreach($arr as $value){ //$value = Key=>(value);
        echo "<$value> Vaibhav </$value>";
    }

?>