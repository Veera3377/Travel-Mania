<html>
<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: Login.php');

$pname = $_GET['name'];
$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con,'travel');
$q = "SELECT * FROM places where p_name=\"$pname\"";
$result = mysqli_query($con,$q);
$xdata = array();
while($row = mysqli_fetch_array($result,1))
    {
        $xdata[0] = $row['p_id'];
        $xdata[1] = $row['p_location'];
        $xdata[2] = $row['p_desc'];
        $xdata[3] = $row['p_image'];
        $xdata[4] = $row['p_map'];
    }
   // var_dump($xdata);
$a = 0;
$q_hotel = "SELECT * FROM hotels";
$result2 = mysqli_query($con,$q_hotel);
$xdata2 = array(array());
while($row2 =  mysqli_fetch_array($result2,1) )
{
    $xdata2[$a][0] = $row2['H_image'];
    $xdata2[$a][1] = $row2['H_id'];
    $a++;
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
        #img1,#img2,#img3,#img4
        {
            width:150;
            height:114;
        }
        #h1,#h2,#h3,#h4
        {
            width: 125;
            height: 94;
        }
         #map
        {
            width:570;
            height:311;
        }
        .column {
    max-width: 100%;
    display: block;
}

.column img {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
    -moz-transition: all 1s ease; /* Firefox */
    -o-transition: all 1s ease; /* IE 9 */
    -ms-transition: all 1s ease; /* Opera */
    transition: all 1s ease;
}

.column:hover img {
    -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.25); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.25);
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
<div class="row small-up-4">
<div class="column">
<img class="thumbnail" id="img1">
</div>
<div class="column">
<img class="thumbnail" id="img2">
</div>
<div class="column">
<img class="thumbnail" id="img3">
</div>
<div class="column">
<img class="thumbnail" id="img4">
</div>
 <h3 class="tittle">View On Map</h3>
<div class="medium-6 columns">
    <iframe  id="map"></iframe>
</div>
</div>
</div>
<div class="medium-6 large-5 columns">
<h3><strong id="placename"></strong></h3>
<p id="desc">Summary</p>
<h3>Hotels Around Here</h3>
<div class="row small-up-4">
<div class="column">
<img class="thumbnail" id="h1" onclick="func1('0')"/>
</div>
<div class="column">
<img class="thumbnail" id="h2" onclick="func1('1')"/>
</div>
<div class="column">
<img class="thumbnail" id="h3" onclick="func1('2')">
</div>
<div class="column">
<img class="thumbnail" id="h4" onclick="func1('3')">
</div>
</div>
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
        var name = '<?php echo $pname?>';
        var state = document.getElementById("placename");
        state.innerHTML = name;
        var Sum = document.getElementById('desc');
        Sum.innerHTML = data[2];
        var bigimg = document.getElementById('bigimg');
        var images = new Array();
        images = data[3].split(',');
        bigimg.src= 'images/'+data[1]+'/'+images[0];
        var img1 = document.getElementById('img1');
        var img2 = document.getElementById('img2');
        var img3 = document.getElementById('img3');
        var img4 = document.getElementById('img4');
        img1.src = 'images/'+data[1]+'/'+images[1];
        img2.src = 'images/'+data[1]+'/'+images[2];
        img3.src = 'images/'+data[1]+'/'+images[3];
        img4.src = 'images/'+data[1]+'/'+images[4];
        var h_img1 = document.getElementById('h1');
        var h_img2 = document.getElementById('h2');
        var h_img3 = document.getElementById('h3');
        var h_img4 = document.getElementById('h4');
        var data2 = <?php echo json_encode($xdata2) ?>;
        h_img1.src = 'images/hotels/'+data2[0][0];
        h_img2.src = 'images/hotels/'+data2[1][0];
        h_img3.src = 'images/hotels/'+data2[2][0];
        h_img4.src = 'images/hotels/'+data2[3][0];
        var map=document.getElementById('map')
        map.src = ''+data[4]+'';
</script>
<script type="text/javascript">
      function func1(id)
    {
        var data2 = <?php echo json_encode($xdata2) ?>;
        window.location.href="hotels.php?value="+data2[id][1];
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
