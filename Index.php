<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TravelMania</title>
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style type="text/css">
        
        .dropdown {
            position: relative;
            display: block;
            padding-right: 150px;
            z-index:1;
            }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            }
            .menu
            {
                font-size: 20px;
                font-family: 'algerian';
                font-weight: bold;
            }
            .dropdown:hover .dropdown-content {
             display: block;
            }

            .carousel
            {
                background: #2f4357;
                margin-top: 20px;
            }
            .carousel .item img
            {
                margin: 0 auto; /* Align slide image horizontally center */
            }
            .bs-example
            {
                margin: 20px;
            }
            .thumbnail
            {
            	height:99px;
            }
        </style>
    </head>
    <?php
        error_reporting(0);
    	//$var = $_GET['fname'];
    	session_start();
    	$var = $_SESSION['name'];
    	$f = fopen('a.txt','w');
    	fwrite($f,$var);
    ?>
    <body>

            <div class="top-bar">

            <div class="top-bar-left">
            <center><a href="Index.php"><img src="TravelManiaLogo.png" height="50" width="100"></img></a></center>
                <ul class="menu">
                
                    <h2>
                       <li class="float-right">
                            <!--<center><a href="Index.php"><img src="TravelManiaLogo.png" height="50" width="80"></img></a></center>-->
                        </li>
                    </h2>
                </ul>
            </div>
            <div class="top-bar-right">
            <br/><br/>
                <ul class="menu">
                    <li>
                        <input type="search" placeholder="Search">
                    </li>
                    <li>
                        <button type="button" class="button">Search</button>
                    </li>
                    <li>
                        <a href="Index.php?flag=1">Home</a>
                    </li>
                    <li>
                        <a id="namewel" href="Login.php">Login</a>
                    </li>
                    <li>
                    <a href="States.php">States</a>
                    </li>
                    <li>
                    <div class="dropdown">
                    <a href=""><span>Top 5</span></a>
                    <div class="dropdown-content">
                    <p><a href="toplist.php?name=Most visited">Most visited</a></p>
                    <p><a href="toplist.php?name=Mysterious Escavations">Mysterious Escavations</a></p>
                    <p><a href="toplist.php?name=Heritage">Heritage</a></p>
                    <p><a href="toplist.php?name=Vacations">Vacations</a></p>
                    <p><a href="toplist.php?name=Adventurous">Adventurous</a></p>
                    </div>
                    </li>
              </ul>
            </div>
            </div>
            </div>
        </div>
        <div class="bs-example">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/Hampi3.jpg" alt="First Slide">
                    </div>
                    <div class="item">
                        <img src="images/periyan.jpg" alt="Second Slide">
                    </div>
                    <div class="item">
                        <img src="images/rameshwaram5.jpg" alt="Third Slide">
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <hr>
        <center>
            <div class="row column text-center">
                <h2>We Recommend These Awesome Places For This Season!</h2>
                <hr>
            </div>
            <div class="row small-up-2 large-up-4">
                <div class="column">
                    <img class="thumbnail" src="images/Karnataka/HAMPI.jpg">
                    <center>
                        <h5>Karnataka</h5>
                    </center>
                    <a href="StatesPages.php?name=Karnataka" class="button expanded">Let's Go Here!</a>
                </div>
                <div class="column">
                    <img class="thumbnail" src="images/Kerala/KOCHI.jpg">
                    <center>
                        <h5>Kerala</h5>
                    </center>
                    <a href="StatesPages.php?name=Kerala" class="button expanded">Let's Go Here!</a>
                </div>
                <div class="column">
                    <img class="thumbnail" src="images/Andhra pradesh/warrangal fort.jpg">
                    <center>
                        <h5>Andhra Pradesh</h5>
                    </center>
                    <a href="StatesPages.php?name=Andhra Pradesh" class="button expanded">Let's Go Here!</a>
                </div>
                <div class="column">
                    <img class="thumbnail" src="images/TamilNadu/ooty.jpg">
                    <center>
                        <h5>TamilNadu</h5>
                    </center>
                    <a href="StatesPages.php?name=TamilNadu" class="button expanded">Let's Go Here!</a>
                </div>
            </div>
            <div class="row column text-center">
                <h4>
                    <a href="States.php" class="float-right">View All</a>
                </h4>
            </div>
            <center>
                <hr>
                <div class="row column">
                    <ul class="menu">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                    <br>
                </div>
                <script>
                var q = window.location.search.substring(1);
                var a = q.split("&");
                for (var i = 0; i <a.length; i++) 
                {
                    var b = a[i].split("=");
                }
                if(b[1]=='1')
                {
                var n = document.getElementById("namewel");
                var name = '<?php echo $var?>';
                n .innerHTML =  "Welcome  " + name + " !!"; 
                n.setAttribute('title','Click to LOGOUT:(');
                n.style.color = "RED";
                n.style.fontWeight = "bold";
                n.style.fontFamily = "algerian";
                n.style.fontSize = "20px";
                n.addEventListener('click',func3);
                }
                function func3()
                {
                    var n = document.getElementById("namewel");
                    alert("THANK YOU VISIT AGAIN!!!");
                    n.href='index.php';
                }
                </script>
                <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
                <script>
                    $(document).foundation();
                </script>
                <script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
    

</center></center></body></html>