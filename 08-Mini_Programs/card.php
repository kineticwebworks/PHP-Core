<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap" rel="stylesheet">

    <title>Card App | Program Page</title>
    <style>
        * {
            font-family: 'Readex Pro', sans-serif;
            text-transform: uppercase;
        }

        a {
            text-decoration: none;
        }

        .sec_1 {
            min-height: 80vh;
        }

        input {
            margin-bottom: 10px;
        }

        label {
            margin-top: 5px;
        }

        input[type=radio]:nth-last-child(-n+2),
        input[type=checkbox]:nth-last-child(-n+2) {
            margin-left: 10px;
        }

        .h1 {
            font-size: 34px;
            font-weight: 700;
        }

        .h2 {
            font-size: 28px;
            font-weight: 700;
        }

        .h3 {
            font-size: 24px;
            font-weight: 700;
        }

        .h4 {
            font-size: 21px;
            font-weight: 700;
        }

        .h4 {
            font-size: 18px;
            font-weight: 700;
        }

        .h {
            font-size: 16px;
            font-weight: 700;
        }
    </style>
</head>

<body>


    <!-- PHP CODE -->
    <?php

    //Form Data Fetch
    if (isset($_POST['psmt'])) {
        extract($_POST);
        // print_r($_POST);
    } else {
        $fullname = "Default";
        $starsign = "Default";
        $gender = "Male/Female/Third";
    }

    // Manual Card Color Change 
    if (isset($_POST['psmt'])) {
        $bgcolor = $colorset;
    } else {

        if (@$_GET['color'] == 'one') {
            $bgcolor = '#6E3CBC';
        } else if (@$_GET['color'] == 'two') {
            $bgcolor = '#FF6701';
        } else if (@$_GET['color'] == 'three') {
            $bgcolor = '#FF577F';
        } else if (@$_GET['color'] == 'four') {
            $bgcolor = '#5AA897';
        } else {
            $bgcolor = '#ffffff';
        }
    }


    if (@$htag == 1) {
        $headingType = "h1";
    } else if (@$htag == 2) {
        $headingType = "h2";
    } else if (@$htag == 3) {
        $headingType = "h3";
    } else if (@$htag == 4) {
        $headingType = "h4";
    } else if (@$htag == 5) {
        $headingType = "h5";
    } else {
        $headingType = "p";
    }


?>
    <!-- PHP CODE -->







    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php?page=homepage">Card App Co.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-4">
                        <a class="nav-link active" aria-current="page" href="index.php?page=vpage">Visiting Card</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="index.php?page=bpage">Birthday Card</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container border mt-4 sec_1">
        <div class="row">
            <div class="col-lg-6 sec_1">


                <!-- color change -->
                <div class="container-fluid mt-2 overflow-hidden">
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="fullname" value="<?php echo @$_POST['fullname']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Star Sign</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Star Sign" name="starsign" value="<?php echo @$_POST['starsign']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="gender">Select Gender</label> <br>
                            <input type="radio" value="Male" name="gender" checked>Male
                            <input type="radio" value="Female" name="gender">Female
                            <input type="radio" value="Thrid Gender" name="gender">Third Gnder
                        </div>

                        <div class="form-group">
                            <label for="radioBtn">Select Color</label> <br>
                            <input type="color" value="#ffffff" name="colorset">
                        </div>

                        <!-- <div class="form-group">
                            <label for="theam">Select Theam</label> <br>
                            <input type="checkbox" name="theam" checked> Theam 1
                            <input type="checkbox" name="theam"> Theam 2
                            <input type="checkbox" name="theam"> Theam 3
                        </div> -->

                        <div class="form-group">
                            <label for="heading">Select Heading Style</label> <br>
                            <select name="htag">
                                <option value="1" selected>H1</option>
                                <option value="2">H2</option>
                                <option value="3">H3</option>
                                <option value="4">H4</option>
                                <option value="5">H5</option>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-primary mt-2" name="psmt">
                    </form>
                </div>
            </div>

            <div class="col-lg-6 border" style="background-color: <?php echo $bgcolor ?>;">
                <h1 class="mt-4">
                    Card Info
                </h1>

                <h3 class="<?php echo $headingType . " "; ?>mt-4">
                    Name :
                    <?php
                    echo @$fullname;
                    ?>
                </h3>


                <h3 class="<?php echo $headingType . " "; ?>mt-4">
                    Star Sign :
                    <?php
                    echo @$starsign;
                    ?>
                </h3>

                <h3 class="<?php echo $headingType . " "; ?>mt-4">
                    Gender :
                    <?php
                    echo @$gender;
                    ?>
                </h3>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>