<title>Null</title>

<?php
    $var1 = null;
    $var2 = "";
?>

<h3>var1 null : 
        <?php
            echo is_null($var1);
            //an variable defined as null is null and will return 1.
        ?>
</h3>

<h3>var2 empty string : 
        <?php
            echo is_null($var2);
            //empty string is not null.
        ?>
</h3>

<h3>var3 undefined : 
        <?php
            echo is_null($var3);
            //will give a warning but will return 1, but in reality it is undefined variable.
        ?>
</h3>

<hr>

<h3>var1 null : 
        <?php
            echo isset($var1);
            //an variable defined as null is not empty and will not return 1.
        ?>
</h3>

<h3>var2 empty string : 
        <?php
            echo isset($var2);
            //empty string is empty and will return 1.
        ?>
</h3>

<h3>var3 undefined : 
        <?php
            echo isset($var3) . "undefined";
            //undefined is not empty.
        ?>
</h3>

<hr>

<h3>var1 null : 
        <?php
            echo empty($var1);
            # The following values evaluates to empty:
            //1.0
            //2.0.0
            //3."0"
            //4.""
            //5.NULL
            //6.FALSE
            //7.array() 
        ?>
</h3>

<h3>var2 empty string : 
        <?php
            echo empty($var2);
        ?>
</h3>

<h3>var3 undefined : 
        <?php
            echo empty($var3);
            echo "<br";
        ?>

        <?php
        echo "<hr>";
            $data = 10;
            if($data==10){
                echo "Match";
            }
            else{
                echo "No Match";
            }
            echo "<br>".empty($data);//$data is not a empty and has a non empty value inside.
        ?>
</h3>