<html>
<?php
 
session_start();
if (!isset($_SESSION['name']))
    header('location: Login.php');

?>
    <head>
    <style>
     .menu
            {
                font-size: 20px;
                font-family: 'algerian';
                font-weight: bold;
            }
    .thumbnail
    {
        width : 170px;
        height: 220px;
    }
    </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TravelMania</title>
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <style type="text/css">
        </style>
        <div class="top-bar">
            <div class="top-bar-left">
                <ul class="menu">
                    <center><a href="Index.php"><img src="TravelManiaLogo.png" height="50" width="100"></img></a></center>
                </ul>
            </div>
            <div class="top-bar-right">
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
                </ul>
            </div>
        </div>
        <hr>
        <center><h1>STATES</h1></center>
        <br>
        <div class="row small-up-2 medium-up-3 large-up-6">
             <div class="column">
                <img class="thumbnail" src="images/Andaman and nicobar/jolly3.jpg">
                <center><h5>Andaman and Nicobar Islands</h5></center>
                <a href="StatesPages.php?name=Andaman and nicobar" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="images/Arunachal Pradesh/Arunachal.jpg">
                <center><h5>Arunachal Pradesh</h5></center>
                <a href="StatesPages.php?name=Arunachal Pradesh" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="images/Assam/Assam.jpg">
                <center><h5>Assam</h5></center>
                <br>
                <a href="StatesPages.php?name=Assam" class="button small expanded hollow">Let's Go Here!</a>
            </div>

            <div class="column">
                <img class="thumbnail" src="images/Delhi/delhi.jpg">
                <center><h5>Delhi</h5></center>
                <br>
                <a href="StatesPages.php?name=Delhi" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            
            <div class="column">
            <img class="thumbnail" src="images/Gujarat/Mahabat-ka-Maqbara.jpg">
                <center><h5>Gujarat</h5></center>
                <br>
                <a href="StatesPages.php?name=Gujarat" class="button small expanded hollow">Let's Go Here!</a>
            </div>
          
            <div class="column">
                <img class="thumbnail" src="images/JammuandKashmir/jammuandkashmir.jpg">
                <center><h5>Jammu and Kashmir</h5></center>
                <a href="StatesPages.php?name=JammuandKashmir" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            
            <div class="column">
                <img class="thumbnail" src="images/Karnataka/GolGumbaz2.jpg">
                <center><h5>Karnataka</h5></center>
                <br>
                <a href="StatesPages.php?name=Karnataka" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="images/Kerala/KOVALAM.jpg">
                <center><h5>Kerala</h5></center>
                <br>
                <a href="StatesPages.php?name=Kerala" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            
            <div class="column">
                <img class="thumbnail" src="images/Madhyapradesh/Madhya-Pradesh.jpg">
                <center><h5>Madhya Pradesh</h5></center>
                <br>
                <a href="StatesPages.php?name=Madhya Pradesh" class="button small expanded hollow">Let's Go Here!</a>
            </div>
           
            <div class="column">
                <img class="thumbnail" src="images/Meghalaya/Megalaya.jpg">
                <center><h5>Meghalaya</h5></center>
                <br>
                <a href="StatesPages.php?name=Meghalaya" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="images/punjab/Harmandir5.jpg">
                <center><h5>Punjab</h5></center>
                <br>
                <a href="StatesPages.php?name=Punjab" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="images/Rajasthan/rajasthan.jpg">
                <center><h5>Rajasthan</h5></center>
                <br>
                <a href="StatesPages.php?name=Rajasthan" class="button small expanded hollow">Let's Go Here!</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="images/TamilNadu/coimbatore.jpg">
                <center><h5>TamilNadu</h5></center>
                <br>
                <a href="StatesPages.php?name=TamilNadu" class="button small expanded hollow">Let's Go Here!</a>
            </div>
        </div>
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
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
    </body>
</html>