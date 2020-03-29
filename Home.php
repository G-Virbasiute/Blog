<html>
    <head>
        <title>BlogTitle</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
        <link href="CarouselCSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <center><img style="margin-top: 10px; margin-bottom: 5px;" src="logo.png"></center>

    <div style="border-top: 2px solid black; border-bottom: 2px solid black; ">    
        <nav class="navbar navbar-expand-lg navbar-light" style=" font-family: 'Amatic SC', cursive; font-size: 30px; left: 32%;">

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tutorials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>

                    <!-- ---------------These could be pulled out of a database table------------------->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#" style="font-size: 30px;">Crochet</a>
                            <a class="dropdown-item" href="#" style="font-size: 30px;">Knitting</a>
                            <a class="dropdown-item" href="#" style="font-size: 30px;">Embroidery</a>
                            <a class="dropdown-item" href="#" style="font-size: 30px;">Painting</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Members Portal
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#" style="font-size: 30px;">Sign up</a>
                            <a class="dropdown-item" href="#" style="font-size: 30px;">Log in</a>
                            <a class="dropdown-item" href="#" style="font-size: 30px;">Your dashboard</a> <!-- Only accessible after someone has logged in-->
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <div>
        <center><h1 style="font-family: 'Amatic SC', cursive; font-size: 100px"> Happy crafting!</h1></center>
    </div></br>
    <h2 style=" font-family: 'Amatic SC', cursive; font-size: 50px; font-weight: bold; left: 32%;">Our top tutorials:</h2>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 1000px; height:1600px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/wallHanger.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: 'Amatic SC', cursive; font-size: 80px; font-weight: bold; color: black;">Make a woven wall hanging!</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/paperHead.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: 'Amatic SC', cursive; font-size: 80px; font-weight: bold; color: black;">Fun and cruelty free animal heads</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/rabbit.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-family: 'Amatic SC', cursive; font-size: 80px; font-weight: bold; color:black;">It's Easter - why not complete this bunny project?</h5>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</body>
</html>