<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Image Fetcher</title>

    <style>
        .div{
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<body>
        <?php
        $data=rand(2,12);
        echo "<img src='./Media/$data.jpg' style='height: 100%; width:100%;'>";
        ?>

    <div class="div">

    </div>
        
</body>
</html>