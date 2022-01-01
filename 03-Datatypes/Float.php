<title>Float</title>

<h1><?php echo $float = 10.563; ?></h1>
<h1><?php echo $float = 10.501; ?></h1>
<h1><?php echo $float = 4/3 ?></h1>
<h1> <?php //Will throw fatal error
//echo $float = 4/0 ?> </h1> 

<!-- Float Functions -->
        <h1>
            <?php
                //1. Round(); Function
                    echo round($float,1);
                    //(variable, range that needs to be rounded off).
                echo "<br>";
                //2. Ceil(); Function
                    echo ceil($float);
                    //(rounds off to the upper side of value 10.5 becomes 11).
                //2. Floor(); Function
                echo "<br>";
                    echo floor($float);
                    //(rounds off to the lower side of value 10.5 becomes 10).
            ?>
        </h1>
<hr>
        <h3>
            <?php
                echo $int = 10;
            ?>
        </h3>

        <h2>
            <?php
                echo "<h1>is integer ".is_int($int)."</h1>";
                echo "<h1>is float ".is_float($int)."</h1>"; //when the boolean value is "0" it returns empty and not a 0.
                echo "<br>";
                echo "<h1>is integer ".is_int($float)."</h1>";
                echo "<h1>is float ".is_float($float)."</h1>";
                echo "<br>";
                echo "<h1>is integer ".is_numeric($float)."</h1>";
                echo "<h1>is float ".is_numeric($float)."</h1>";
            ?>
        </h2>