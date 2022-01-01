<title>Boolen</title>

<?php
    $boo = true;
    echo "<h1>$boo</h1>";

    $boo = false;
    echo "<h1>$boo</h1>";
    //Being False will not echo "0" or anything on the page.
    echo "<br>";
    echo "<h1>".is_bool($boo)."</h1>";
?>

<hr>

<?php
    $num=10;

    if(is_float($num)){
        echo "<h1>You Got A Float</h1>";
    }
    else{
        echo "<h1>You Got A Integer</h1>";
    }

?>