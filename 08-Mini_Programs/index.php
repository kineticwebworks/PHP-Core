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

    <title>Card App | Home</title>
    <style>
        * {
            font-family: 'Readex Pro', sans-serif;
            text-transform: uppercase;
        }

        .sec_1 {
            min-height: 80vh;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- Heading PHP Code     -->
    <?php

    $title_Set = ["page1" => "Home Page", "page2" => "Visitng Card", "page3" => "Birthay Card"];

    //Arguments
    if (@$_GET['page'] == 'homepage') {
        $heading = $title_Set['page1'];
    } else if (@$_GET['page'] == 'vpage') {
        $heading = $title_Set['page2'];
    } else {
        $heading = $title_Set['page3'];
    }
    ?>




    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="?page=homepage">Card App Co.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-4">
                        <a class="nav-link" aria-current="page" href="?page=vpage">Visiting Card</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="?page=bpage">Birthday Card</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container border mt-4 sec_1">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-2">
                    <?php echo @$heading; ?>
                </h1>
            </div>

            <div class="col-lg-12">
                <!-- color change -->
                <div class="container-fluid mt-4 overflow-hidden">
                    <div class="row gy-4">
                        <div class="col-6">
                            <a href="card.php?color=one">
                                <div class="p-3 border" style="background-color: #6E3CBC; color: white;">Color 1</div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="card.php?color=two">
                                <div class="p-3 border" style="background-color: #FF6701; color: white;">Color 2</div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="card.php?color=three">
                                <div class="p-3 border" style="background-color: #FF577F; color: white;">Color 3</div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="card.php?color=four">
                                <div class="p-3 border" style="background-color: #5AA897; color: white;">Color 4</div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>