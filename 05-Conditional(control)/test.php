<?php

    $marks = 95;
    $Tmarks = 100;
    $comp=$marks/$Tmarks*100;

    if($comp <=100 && $marks>=90 ){
        echo "Grade A";
    }

    else if($comp <=89 && $marks>=75 ){
        echo "Grade B";
    }

    else if($comp <=74 && $marks>=50 ){
        echo "Grade D";
    }
    else{
        echo "Fail";
    }
?>

<hr>

<?php
    $arr = [10,20,50];

    if($arr[0] < $arr[1] && $arr[0] < $arr[2]){
        echo $arr[0];
    }
    else if($arr[1] < $arr[0] && $arr[1] < $arr[2]){
        echo $arr[0];
    }
    else{
        echo $arr[2];
    }
?>
<hr>
<?php

    $v = ["a","e","i","o","u"];

    $data = "z";
    $data2 = "a";

    if($data==$v[0] || $data==$v[1] || $data==$v[2] || $data==$v[3] || $data==$v[4]){ // we can use or / ||.
        echo "Is a Vovel";
    }
    else{
        echo "Not A Vovel";
    }

    echo "<br>";

    if($data2==$v[0] or $data2==$v[1] or $data2==$v[2] or $data2==$v[3] or $data2==$v[4]){
        echo "Is a Vovel";
    }
    else{
        echo "Not A Vovel";
    }

?>
<hr>
<hr>
<hr>

<?php
    #  @ decorator :- 
    // to hide the warning

    #  error_reporting(0)
    // Disables all eroor messages

    error_reporting(0);
    // print_r($_GET);
    echo @$num1=$_GET["num1"];
    echo @$num2=$_GET["num2"];
    // extract($_GET);
    // echo "<h1>$num1</h1>";
?>

<form method="get">
    <p><input type="number" name="num1" placeholder="Enter Number 1"></p>
    <p><input type="number" name="num2" placeholder="Enter Number 2"></p>
    <p><input type="submit" name="submit" value="Submit"></p>

</form>