<?php 

function add($x,$y){

    $res = $x + $y;
    $res1 = $x - $y;
    $res2 = $x * $y;
    $res3 = $x / $y;
    return array($res,$res1,$res2,$res3);
}
$res = add(10,20);
echo $res[0] . "<br>";
echo $res[1] . "<br>";
echo $res[2] . "<br>";
echo $res[3] . "<br>";



?>