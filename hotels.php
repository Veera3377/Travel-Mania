<html>
<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: Login.php');
$id = $_GET['value'];
$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con,'travel');
$q = "SELECT * FROM hotels where H_id=\"$id\"";
$result = mysqli_query($con,$q);
$xdata = array();
while($row = mysqli_fetch_array($result,1))
    {
        $xdata[0] = $row['H_id'];
        $xdata[1] = $row['H_location'];
        $xdata[2] = $row['H_desc'];
        $xdata[3] = $row['H_image'];
        $xdata[4] = $row['H_name'];
        $xdata[5] = $row['H_rating'];
        $xdata[6] = $row['H_feedback'];
    }
//var_dump($xdata);
//var_dump($pname);
//var_dump($row[0]['p_name']);
?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TravelMania</title>
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css">
        <style>
         .menu
            {
                font-size: 20px;
                font-family: 'algerian';
                font-weight: bold;
            }
        #bigimg
        {
            width:570;
            height:311;
        }
        #rating
        {
            width:120;
            height:98;
        }
        </style>
 
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
<br>
 
<div class="row">
<div class="medium-6 columns">
<img id="bigimg" class="thumbnail">
</div>
<div class="medium-6 large-5 columns">
<h3><strong id="placename"></strong></h3>
<p id="desc">Summary</p>
<h3>Location</h3>
<p id="loc"></p>
<h3>FeedBack</h3>
<p id="feedback"></p>
<h3>Rating</h3>
<img id="rating"></img>
<div>
<h3>PAYMENT</h3>
<form method="POST" action="payment.php">
Card No*: <input type="text" id="cardno" name="cardno" required/>
CVV*: <input type="text" id="cvv" name="cvv" minlength="3" maxlength="3" pattern="[0-9]+" required/>
Number of Rooms*: <input type="number" name="room" id="room" min="1" max="4" onblur="func1()" required>
Amount: <input type="text" name="amt" id="amt" readonly/>
<input type="submit" name="submit" value="BOOK NOW" onclick="func2()">
</form>
</div>
</div>
<div class="column row">
<hr>
<ul class="menu">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li class="float-right">Copyright 2016</li>
</ul>
</div>
<script type="text/javascript">
        var data = <?php echo json_encode($xdata) ?>;
        var loca = document.getElementById('loc');
        loca.innerHTML = data[1];
        var Sum = document.getElementById('desc');
        Sum.innerHTML = data[2];
        var bigimg = document.getElementById('bigimg');
        bigimg.src= 'images/hotels/'+data[3];
        var state = document.getElementById("placename");
        state.innerHTML = data[4];
        var rating = document.getElementById('rating');
        if(data[5]=='3')
        rating.src = 'images/hotels/3star.jpg';
        if(data[5]=='4')
        rating.src = 'images/hotels/4star.jpg';
        if(data[5]=='5')
        rating.src = 'images/hotels/5star.jpg';
        var feedback = document.getElementById('feedback');
        feedback.innerHTML = data[6];  
        function func1()
        {
            var amt = document.getElementById('amt');
            var room = document.getElementById('room');
            if(room.value == '3')
            amt.value = 5000;
            else if(room.value == '2')
            amt.value = 3500;
            else if(room.value == '1')
            amt.value = 1500;
            else 
            amt.value = 6000;

        } 
        function func2()
        {
            var card=document.getElementById("cardno").value;
            var cvv=document.getElementById("cvv").value;
            var rooms=document.getElementById("room").value;
            if(card!= "" && cvv!= "" && rooms!= "")
            {
               alert("YOUR PAYMENT SUCCESSFULLY DONE");
            }
            else
            {
                alert("Enter all your credentials for payment");
            }
        }     
</script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
</body>
</html>
