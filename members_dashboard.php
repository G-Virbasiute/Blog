<html>
    <head>
        <title>BlogTitle</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
        <link href="stylesheets/dashboard.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
        <link href="CarouselCSS.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        <!--nav bar-->
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
<!--end of navbar-->

<!-- welcome and heading info-->
<div>
<h2>Welcome!</h2>
<p>Here's the place to manage your info, see your favourite posts and catch up on upcoming events...</p>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Your Details</h2>
    <p>TO BE CREATED</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Saved Posts</h2>
    <p>TO BE CREATED</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Upcoming Events</h2>
    <p><centre><iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FLondon&amp;src=ZW4udWsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0&amp;showCalendars=1&amp;showTz=0" style="border:solid 1px #777" width="400" height="300" frameborder="0" scrolling="no"></centre></iframe></p>
  </div>
</div>

