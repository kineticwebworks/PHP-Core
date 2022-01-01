<title>Integer</title>

<?php
    $var1 = 3;
    $var2 = 2;
?>

<?php
    $var3 = 3;
    $var4 = 2;
?>

<?php
    $var5 = 3;
    $var6 = 2;
?>

<?php
    echo $var1 + $var2;
?>
<h1>Basic Maths : <?php echo (($var3 + $var4)+100*2/$var5)?></h1>


<h1>Absolute Value : <?php echo abs(10-20)?></h1>
<!-- abs(); Function returns absolute value (not  anegative value) -->
<hr>
<h1>Exponential : <?php echo  pow(2,3)?></h1>
<!-- pow(); Function returns a value (number that need to treated, the power) -->
<hr>
<h1>Square Root : <?php echo  sqrt(110)?></h1>
<!-- pow(); Function returns the squareroot value (number which you want to get squareroot of) -->
<hr>
<h1>Random Fun. : <?php echo  rand(1000,9999)?></h1>
<!-- rand(); Function returns a random value (min-Value, Max Value) -->
<hr>

<!-- PHP Ineteger Function's -->

<!-- Ineteger can have to 10 digit hence if one wants more number one should use BigInt() -->



<?php 
#<!-- Case 1 (Assignement Operators-->

//1. +=
//2. -=
//3. *=
//4. /=

//Increment/ Decrement : 
    $var1 = 'Kinetic';
    $var2 = 'Orb';
    
        echo $var1 ++;
        echo $var1;
        echo "<br>";
        echo ++$var1 ;
        echo $var1;

        echo $var1 --;
        echo $var1;
        echo "<br>";
        echo --$var1 ;
        echo $var1;
?>
    



