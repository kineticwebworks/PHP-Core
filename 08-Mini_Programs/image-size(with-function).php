<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Size Get</title>
    <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Pushster', cursive;
        }

        input {

            font-size: 21px;
            margin-bottom: 2px;
        }

        label {
            font-size: 21px;
            line-height: 1.5em;
            margin-bottom: 3px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .demo {
            height: 100px;
            width: 200px;
            border: 2px solid #cccccc;
            margin-bottom: 10px;
        }

        form {
            width: 200px;
        }

        .your-image {
            height: 100%;
            width: 100%;
            border: 2px solid #cccccc;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>

<body>

    <?php

     $temp = "";
     strtolower(@$_POST['size']);


     if (@$_POST['size'] == "large") {
         $outputSize = 100 . "%";
     } else if (@$_POST['size'] == "medium") {
         $outputSize = 75 . "%";
     } else if (@$_POST['size'] == "small") {
         $outputSize = 50 . "%";
     } else {
         $outputSize = 25 . "%";
     }

    ?>


  
    <div class="demo">
        <img src="demoimage.jpg" width="100%">
    </div>

    <form method="post">
        <label for="size">Size(Large/Medium/Small)</label>
        <br>
        <input type="text" name="size">
        <br>
        <input type="submit" value="Get Image" style="padding: 5px 8px;">
    </form> 
    <hr>
    <div class="your-image">
        <img src="demoimage.jpg" width="<?php echo $outputSize; ?>">
    </div>


</body>

</html>


<!-- sizeChange($Size)
                                        {

                                            if ($Size == "large") {
                                                $outputSize = 100 . "%";
                                            } else if ($Size == "medium") {
                                                $outputSize = 70 . "%";
                                            } else if ($Size == "small") {
                                                $outputSize = 50 . "%";
                                            } else {
                                                $outputSize = 25 . "%";
                                            }
                                            echo $outputSize;
                                        }

                                        sizeChange(""); -->

<?php

function add($x,$y){
    $res = $x + $y;
}

echo add(10,20);

?>